<?php
class RestriccionService
{
    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $restriccionDao = new RestriccionDao($adapter);
        $restricciones = $restriccionDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Restricciones obtenidas correctamente',
            'response' => true,
            'data' => $restricciones
        ]);
    }

    public static function insert($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar la restriccion',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['restriccion_desc']
        )) {
            $restriccionDao = new RestriccionDao($adapter);
            $restriccion_desc = $_POST['restriccion_desc'];

            $restriccion = $restriccionDao->insert($restriccion_desc);

            $result['status'] = 'success';
            $result['message'] = 'Restriccion insertada correctamente';
            $result['response'] = true;
            $result['data'] = $restriccion;
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
            'message' => 'Faltan datos para actualizar el restriccion',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['restriccion_desc'],
            $_POST['restriccion_id']
        )) {
            $restriccionDao = new RestriccionDao($adapter);
            $restriccion_id = $_POST['restriccion_id'];

            $current_restriccion = $restriccionDao->selectById($restriccion_id);
            if (!$current_restriccion) {
                $result['message'] = 'El restriccion no existe';
                echo json_encode($result);
                exit();
            }

            $restriccion_desc = $_POST['restriccion_desc'];
            $restriccion_id = $_POST['restriccion_id'];

            $restriccion = $restriccionDao->update(
                $restriccion_id,
                $restriccion_desc
            );
            $result['status'] = 'success';
            $result['message'] = 'Restriccion actualizada correctamente';
            $result['response'] = true;
            $result['data'] = $restriccion;
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
            'message' => 'Faltan datos para eliminar la restriccion',
            'response' => false,
            'data' => null
        ];
        if (isset($_POST['restriccion_id'])) {
            $restriccionDao = new RestriccionDao($adapter);
            $restriccion_id = $_POST['restriccion_id'];
            $restriccion = $restriccionDao->selectById($restriccion_id);
            if (!$restriccion) {
                $result['message'] = 'La restriccion no existe';
                echo json_encode($result);
                exit();
            }
            $restriccionDao->delete($restriccion_id);
            $result['status'] = 'success';
            $result['message'] = 'Restriccion eliminada correctamente';
            $result['response'] = true;
        }
        echo json_encode($result);
    }
}
