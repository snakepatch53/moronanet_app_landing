<?php
class MensajeDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM mensajes");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $row;
        }
        return $result;
    }
    public function selectById(int $mensaje_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM mensajes WHERE mensaje_id = $mensaje_id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    public function insert(
        string $mensaje_name,
        string $mensaje_affair,
        string $mensaje_phone,
        string $mensaje_email,
        string $mensaje_message

    ) {
        $mensaje_last = date("Y-m-d H:i:s");
        $mensaje_created = date("Y-m-d H:i:s");
        $resultset = $this->mysqlAdapter->query("
            INSERT INTO mensajes SET 
                mensaje_name='$mensaje_name',
                mensaje_affair='$mensaje_affair',
                mensaje_phone='$mensaje_phone',
                mensaje_email='$mensaje_email',
                mensaje_message='$mensaje_message',
                mensaje_last='$mensaje_last',
                mensaje_created='$mensaje_created'
        ");
        if ($resultset) return $this->getLastId();
        return 0;
    }

    public function delete(int $mensaje_id)
    {
        $resutset = $this->mysqlAdapter->query("DELETE FROM mensajes WHERE mensaje_id = $mensaje_id ");
        if ($resutset) return true;
        return false;
    }
}
