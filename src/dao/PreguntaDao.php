<?php
class PreguntaDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM preguntas");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $row;
        }
        return $result;
    }

    public function selectById($id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM preguntas WHERE pregunta_id = $id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    public function insert(
        string $pregunta_name,
        string $pregunta_response
    ) {
        $pregunta_last = date('Y-m-d H:i:s');
        $pregunta_created = date('Y-m-d H:i:s');
        $response = $this->mysqlAdapter->query("
            INSERT INTO preguntas (pregunta_name, pregunta_response, pregunta_last, pregunta_created)
            VALUES (
                '$pregunta_name', 
                '$pregunta_response', 
                '$pregunta_last', 
                '$pregunta_created'
                )");
        if ($response) return $this->getLastId();
        return false;
    }

    public function update(
        string $pregunta_id,
        string $pregunta_name,
        string $pregunta_response
    ) {
        $pregunta_last = date('Y-m-d H:i:s');
        $response = $this->mysqlAdapter->query("
            UPDATE preguntas SET 
                pregunta_name = '$pregunta_name', 
                pregunta_response = '$pregunta_response', 
                pregunta_last = '$pregunta_last'
            WHERE pregunta_id = $pregunta_id");
        if ($response) return true;
        return false;
    }

    public function delete(string $pregunta_id)
    {
        $response = $this->mysqlAdapter->query("DELETE FROM preguntas WHERE pregunta_id = $pregunta_id");
        if ($response) return true;
        return false;
    }
}
