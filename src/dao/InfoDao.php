<?php
class InfoDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }
    public function getLastId()
    {
        return $this->mysqlAdapter->getLastId();
    }
    public function select()
    {
        $result = $this->mysqlAdapter->query("SELECT * FROM info");
        $row = mysqli_fetch_assoc($result);
        $mapa = $row['info_location'] ?? "";
        if (strpos($mapa, 'iframe') === false) {
            $mapa = '<iframe src="' . $mapa . '" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
        $row['info_location'] = $mapa;
        return $row;
    }

    public function update(
        string $info_name,
        string $info_country,
        string $info_province,
        string $info_city,
        string $info_address,
        string $info_location,
        string $info_phone,
        string $info_cellphone,
        string $info_email,
        string $info_desc,
        string $info_mision,
        string $info_vision,
        string $info_slider_title,
        string $info_slider_desc
    ) {
        $info_mision = addslashes($info_mision);
        $info_vision = addslashes($info_vision);
        $info_desc = addslashes($info_desc);
        return $this->mysqlAdapter->query("
            UPDATE info SET 
                info_name = '$info_name',
                info_country = '$info_country',
                info_province = '$info_province',
                info_city = '$info_city',
                info_address = '$info_address',
                info_location = '$info_location',
                info_phone = '$info_phone',
                info_cellphone = '$info_cellphone',
                info_email = '$info_email',
                info_desc = '$info_desc',
                info_mision = '$info_mision',
                info_vision = '$info_vision',
                info_slider_title = '$info_slider_title',
                info_slider_desc = '$info_slider_desc'
        ");
    }
}
