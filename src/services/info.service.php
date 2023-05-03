<?php
class InfoService
{
    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $infoDao = new InfoDao($adapter);
        $info = $infoDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Información obtenida',
            'response' => true,
            'data' => $info
        ]);
        exit();
    }

    public static function update($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $infoDao = new InfoDao($adapter);

        $response = [
            'status' => 'error',
            'message' => 'No se pudo actualizar la información',
            'response' => false,
            'data' => null
        ];

        if (isset(
            $_POST['info_name'],
            $_POST['info_country'],
            $_POST['info_province'],
            $_POST['info_city'],
            $_POST['info_address'],
            $_POST['info_location'],
            $_POST['info_phone'],
            $_POST['info_cellphone'],
            $_POST['info_email'],
            $_POST['info_desc'],
            $_POST['info_mision'],
            $_POST['info_vision'],
            $_POST['info_slider_title'],
            $_POST['info_slider_desc']
        )) {
            $infoDao->update(
                $_POST['info_name'],
                $_POST['info_country'],
                $_POST['info_province'],
                $_POST['info_city'],
                $_POST['info_address'],
                $_POST['info_location'],
                $_POST['info_phone'],
                $_POST['info_cellphone'],
                $_POST['info_email'],
                $_POST['info_desc'],
                $_POST['info_mision'],
                $_POST['info_vision'],
                $_POST['info_slider_title'],
                $_POST['info_slider_desc']
            );

            if (isset($_FILES['info_logo'])) uploadFIle($_FILES['info_logo'], './public/img/', 'logo', 'png');
            if (isset($_FILES['info_icon'])) uploadFIle($_FILES['info_icon'], './public/img/', 'icon', 'png');

            $response = [
                'status' => 'success',
                'message' => 'Información actualizada',
                'response' => true,
                'data' => null
            ];
        }
        echo json_encode($response);
    }
}
