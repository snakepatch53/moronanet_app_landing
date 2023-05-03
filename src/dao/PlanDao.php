<?php
class PlanDao
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
        $reultset = $this->mysqlAdapter->query("SELECT * FROM plan");
        $result = [];
        while ($row = mysqli_fetch_assoc($reultset)) {
            $result[] = $row;
        }
        return $result;
    }
    public function selectBasicPlan_price()
    {
        $reultset = $this->mysqlAdapter->query("SELECT MIN(plan_price_value) AS price FROM plan WHERE plan_price_value != 0;");
        $row = mysqli_fetch_assoc($reultset);
        $price = $row['price'];
        if ($price == null) return 0;
        return $row['price'];
    }
    public function selectById(int $plan_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM plan WHERE plan_id = $plan_id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    public function insert(
        String $plan_name,
        String $plan_icon,
        String $plan_sharing_name,
        String $plan_sharing_value,
        String $plan_price_value,
        String $plan_price_iva,
        String $plan_speed_value,
        String $plan_speed_devices
    ) {
        return $this->mysqlAdapter->query("
            INSERT INTO plan SET 
                plan_name='$plan_name',
                plan_icon='$plan_icon',
                plan_sharing_name='$plan_sharing_name',
                plan_sharing_value='$plan_sharing_value',
                plan_price_value='$plan_price_value',
                plan_price_iva='$plan_price_iva',
                plan_speed_value='$plan_speed_value',
                plan_speed_devices=$plan_speed_devices
        ");
    }
    public function update(
        string $plan_name,
        string $plan_icon,
        string $plan_sharing_name,
        string $plan_sharing_value,
        string $plan_price_value,
        string $plan_price_iva,
        string $plan_speed_value,
        string $plan_speed_devices,
        string $plan_id
    ) {
        return $this->mysqlAdapter->query("
            UPDATE plan SET 
                plan_name='$plan_name',
                plan_icon='$plan_icon',
                plan_sharing_name='$plan_sharing_name',
                plan_sharing_value='$plan_sharing_value',
                plan_price_value='$plan_price_value',
                plan_price_iva='$plan_price_iva',
                plan_speed_value='$plan_speed_value',
                plan_speed_devices=$plan_speed_devices
            WHERE plan_id=$plan_id
        ");
    }
    public function delete(int $plan_id)
    {
        return $this->mysqlAdapter->query("DELETE FROM plan WHERE plan_id = $plan_id ");
    }
}
