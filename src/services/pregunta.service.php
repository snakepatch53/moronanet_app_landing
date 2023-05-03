<?php
class PreguntaService
{
    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $preguntaDao = new PreguntaDao($adapter);
        $preguntas = $preguntaDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'preguntas obtenidas correctamente',
            'response' => true,
            'data' => $preguntas
        ]);
    }

    public static function insert($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar la pregunta',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['pregunta_name'],
            $_POST['pregunta_response']
        )) {
            $preguntaDao = new PreguntaDao($adapter);
            $pregunta_name = $_POST['pregunta_name'];
            $pregunta_response = $_POST['pregunta_response'];
            $pregunta = $preguntaDao->insert(
                $pregunta_name,
                $pregunta_response
            );
            $result['status'] = 'success';
            $result['message'] = 'pregunta insertada correctamente';
            $result['response'] = true;
            $result['data'] = $pregunta;
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
            'message' => 'Faltan datos para actualizar la pregunta',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['pregunta_name'],
            $_POST['pregunta_response'],
            $_POST['pregunta_id']
        )) {
            $preguntaDao = new PreguntaDao($adapter);

            $pregunta_id = $_POST['pregunta_id'];
            $current_pregunta = $preguntaDao->selectById($pregunta_id);
            if (!$current_pregunta) {
                $result['message'] = 'El pregunta no existe';
                echo json_encode($result);
                exit();
            }

            $pregunta_name = $_POST['pregunta_name'];
            $pregunta_response = $_POST['pregunta_response'];

            $pregunta = $preguntaDao->update(
                $pregunta_id,
                $pregunta_name,
                $pregunta_response
            );
            $result['status'] = 'success';
            $result['message'] = 'pregunta actualizada correctamente';
            $result['response'] = true;
            $result['data'] = $pregunta;
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
            'message' => 'Faltan datos para eliminar la pregunta',
            'response' => false,
            'data' => null
        ];
        if (isset($_POST['pregunta_id'])) {
            $preguntaDao = new PreguntaDao($adapter);
            $pregunta_id = $_POST['pregunta_id'];
            $pregunta = $preguntaDao->selectById($pregunta_id);
            if (!$pregunta) {
                $result['message'] = 'La pregunta no existe';
                echo json_encode($result);
                exit();
            }
            $preguntaDao->delete($pregunta_id);
            $result['status'] = 'success';
            $result['message'] = 'pregunta eliminada correctamente';
            $result['response'] = true;
        }
        echo json_encode($result);
    }
}
