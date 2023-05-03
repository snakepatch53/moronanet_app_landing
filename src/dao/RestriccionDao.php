<?php
class RestriccionDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM restricciones");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $row;
        }
        return $result;
    }

    public function selectById(string $id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM restricciones WHERE restriccion_id = $id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    public function insert(
        string $restriccion_desc,
    ) {
        $restriccion_last = date('Y-m-d H:i:s');
        $restriccion_created = date('Y-m-d H:i:s');
        $response = $this->mysqlAdapter->query("
            INSERT INTO restricciones (restriccion_desc, restriccion_last, restriccion_created)
            VALUES (
                '$restriccion_desc', 
                '$restriccion_last', 
                '$restriccion_created'
                )");
        if ($response) return $this->getLastId();
        return false;
    }

    public function update(
        string $restriccion_id,
        string $restriccion_desc,
    ) {
        $restriccion_last = date('Y-m-d H:i:s');
        $response = $this->mysqlAdapter->query("
            UPDATE restricciones SET 
                restriccion_desc = '$restriccion_desc', 
                restriccion_last = '$restriccion_last'
            WHERE restriccion_id = $restriccion_id");
        if ($response) return true;
        return false;
    }

    public function delete(string $restriccion_id)
    {
        $response = $this->mysqlAdapter->query("DELETE FROM restricciones WHERE restriccion_id = $restriccion_id");
        if ($response) return true;
        return false;
    }
}
