<?php
class MensajeService
{

    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $mensajeDao = new MensajeDao($adapter);
        $mensajes = $mensajeDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Mensajes encontrados',
            'response' => true,
            'data' => $mensajes
        ]);
    }
    public static function insert($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar el mensaje',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['mensaje_name'],
            $_POST['mensaje_affair'],
            $_POST['mensaje_phone'],
            $_POST['mensaje_email'],
            $_POST['mensaje_message']
        )) {
            $mensajeDao = new MensajeDao($adapter);

            $mensaje_name = $_POST['mensaje_name'];
            $mensaje_affair = $_POST['mensaje_affair'];
            $mensaje_phone = $_POST['mensaje_phone'];
            $mensaje_email = $_POST['mensaje_email'];
            $mensaje_message = $_POST['mensaje_message'];

            $resultset = $mensajeDao->insert(
                $mensaje_name,
                $mensaje_affair,
                $mensaje_phone,
                $mensaje_email,
                $mensaje_message
            );
            $result['status'] = 'success';
            $result['message'] = 'Mensaje ingresado correctamente';
            $result['response'] = true;
            $result['data'] = $resultset;
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
            'message' => 'Faltan datos para eliminar el mensaje',
            'response' => false,
            'data' => null
        ];
        if (isset($_POST['mensaje_id'])) {
            $mensajeDao = new MensajeDao($adapter);
            $mensaje_id = $_POST['mensaje_id'];
            $mensaje = $mensajeDao->selectById($mensaje_id);
            if (!$mensaje) {
                $result['message'] = 'El mensaje no existe';
                echo json_encode($result);
                exit();
            }
            $resultset = $mensajeDao->delete($mensaje_id);
            if (!$resultset) {
                $result['message'] = 'No se pudo eliminar el mensaje';
                echo json_encode($result);
                return;
            }
            $result['status'] = 'success';
            $result['message'] = 'Mensaje eliminado correctamente';
            $result['response'] = true;
            $result['data'] = $mensaje;
        }
        echo json_encode($result);
    }
}
