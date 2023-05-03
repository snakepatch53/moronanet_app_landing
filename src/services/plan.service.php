<?php
class PlanService
{

    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $planDao = new PlanDao($adapter);
        $plans = $planDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Planes obtenidos correctamente',
            'response' => true,
            'data' => $plans
        ]);
    }

    public static function insert($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar el plan',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['plan_name'],
            $_POST['plan_icon'],
            $_POST['plan_sharing_name'],
            $_POST['plan_sharing_value'],
            $_POST['plan_price_value'],
            $_POST['plan_price_iva'],
            $_POST['plan_speed_value'],
            $_POST['plan_speed_devices']
        )) {
            $planDao = new planDao($adapter);

            $plan_name = $_POST['plan_name'];
            $plan_icon = $_POST['plan_icon'];
            $plan_sharing_name = $_POST['plan_sharing_name'];
            $plan_sharing_value = $_POST['plan_sharing_value'];
            $plan_price_value = $_POST['plan_price_value'];
            $plan_price_iva = $_POST['plan_price_iva'];
            $plan_speed_value = $_POST['plan_speed_value'];
            $plan_speed_devices = $_POST['plan_speed_devices'];

            $plan = $planDao->insert(
                $plan_name,
                $plan_icon,
                $plan_sharing_name,
                $plan_sharing_value,
                $plan_price_value,
                $plan_price_iva,
                $plan_speed_value,
                $plan_speed_devices
            );
            $result['status'] = 'success';
            $result['message'] = 'Plan insertado correctamente';
            $result['response'] = true;
            $result['data'] = $plan;
        }
        echo json_encode($result);
    }

    public static function update($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para actualizar el plan',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['plan_name'],
            $_POST['plan_icon'],
            $_POST['plan_sharing_name'],
            $_POST['plan_sharing_value'],
            $_POST['plan_price_value'],
            $_POST['plan_price_iva'],
            $_POST['plan_speed_value'],
            $_POST['plan_speed_devices'],
            $_POST['plan_id']
        )) {
            $planDao = new planDao($adapter);

            $plan_id = $_POST['plan_id'];
            $current_plan = $planDao->selectById($plan_id);
            if (!$current_plan) {
                $result['message'] = 'El plan no existe';
                echo json_encode($result);
                exit();
            }

            $plan_name = $_POST['plan_name'];
            $plan_icon = $_POST['plan_icon'];
            $plan_sharing_name = $_POST['plan_sharing_name'];
            $plan_sharing_value = $_POST['plan_sharing_value'];
            $plan_price_value = $_POST['plan_price_value'];
            $plan_price_iva = $_POST['plan_price_iva'];
            $plan_speed_value = $_POST['plan_speed_value'];
            $plan_speed_devices = $_POST['plan_speed_devices'];

            $plan = $planDao->update(
                $plan_name,
                $plan_icon,
                $plan_sharing_name,
                $plan_sharing_value,
                $plan_price_value,
                $plan_price_iva,
                $plan_speed_value,
                $plan_speed_devices,
                $plan_id
            );
            $result['status'] = 'success';
            $result['message'] = 'Plan actualizado correctamente';
            $result['response'] = true;
            $result['data'] = $plan;
        }
        echo json_encode($result);
    }

    public static function delete($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para eliminar el plan',
            'response' => false,
            'data' => null
        ];
        if (isset($_POST['plan_id'])) {
            $planDao = new planDao($adapter);
            $plan_id = $_POST['plan_id'];
            $plan = $planDao->selectById($plan_id);
            if (!$plan) {
                $result['message'] = 'El plan no existe';
                echo json_encode($result);
                exit();
            }
            $planDao->delete($plan_id);
            $result['status'] = 'success';
            $result['message'] = 'Plan eliminado correctamente';
            $result['response'] = true;
        }
        echo json_encode($result);
    }
}
