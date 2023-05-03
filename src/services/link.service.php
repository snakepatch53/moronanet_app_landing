<?php
class LinkService
{
    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $linkDao = new LinkDao($adapter);
        $links = $linkDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Links obtenidos correctamente',
            'response' => true,
            'data' => $links
        ]);
    }

    public static function insert($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar el link',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['link_name'],
            $_POST['link_ref']
        )) {
            $linkDao = new LinkDao($adapter);
            $link_name = $_POST['link_name'];
            $link_ref = $_POST['link_ref'];


            $link = $linkDao->insert(
                $link_name,
                $link_ref,
            );
            $result['status'] = 'success';
            $result['message'] = 'Link insertado correctamente';
            $result['response'] = true;
            $result['data'] = $link;
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
            'message' => 'Faltan datos para actualizar el link',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['link_id'],
            $_POST['link_name'],
            $_POST['link_ref']
        )) {
            $linkDao = new LinkDao($adapter);

            $link_id = $_POST['link_id'];
            $current_user = $linkDao->selectById($link_id);
            if (!$current_user) {
                $result['message'] = 'El link no existe';
                echo json_encode($result);
                exit();
            }

            $link_id = $_POST['link_id'];
            $link_name = $_POST['link_name'];
            $link_ref = $_POST['link_ref'];

            $link = $linkDao->update(
                $link_id,
                $link_name,
                $link_ref
            );
            $result['status'] = 'success';
            $result['message'] = 'link actualizado correctamente';
            $result['response'] = true;
            $result['data'] = $link;
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
            'message' => 'Faltan datos para eliminar el link',
            'response' => false,
            'data' => null
        ];
        if (isset($_POST['link_id'])) {
            $linkDao = new LinkDao($adapter);
            $link_id = $_POST['link_id'];
            $link = $linkDao->selectById($link_id);
            if (!$link) {
                $result['message'] = 'El link no existe';
                echo json_encode($result);
                exit();
            }
            $linkDao->delete($link_id);
            $result['status'] = 'success';
            $result['message'] = 'link eliminado correctamente';
            $result['response'] = true;
        }
        echo json_encode($result);
    }
}
