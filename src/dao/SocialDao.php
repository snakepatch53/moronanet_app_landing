<?php
class SocialDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    public function select(): array
    {
        $query = "SELECT * FROM social";
        $resultset = $this->mysqlAdapter->query($query);
        $socials = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $icon = $row['social_icon'];
            if (strpos($icon, '<i') === false) {
                $icon = '<i class="' . $icon . '" i></i>';
            }
            $color = $row['social_color'];
            if (strpos($color, '#') === false) {
                $color = '#' . $color;
            }
            $row['social_icon'] = $icon;
            $row['social_color'] = $color;
            $socials[] = $row;
        }
        return $socials;
    }

    public function selectById(int $id): array
    {
        $query = "SELECT * FROM social WHERE social_id = $id";
        $result = $this->mysqlAdapter->query($query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function insert(
        string $social_nombre,
        string $social_url,
        string $social_icon,
        string $social_color
    ) {
        $social_last = date('Y-m-d H:i:s');
        $social_created = date('Y-m-d H:i:s');
        $query = "
            INSERT INTO social (social_nombre, social_url, social_icon, social_color, social_last, social_created) 
            VALUES (
                '$social_nombre', 
                '$social_url', 
                '$social_icon', 
                '$social_color',
                '$social_last',
                '$social_created'
            )";
        $resultset = $this->mysqlAdapter->query($query);
        if ($resultset) return true;
        return false;
    }

    public function update(
        int $social_id,
        string $social_nombre,
        string $social_url,
        string $social_icon,
        string $social_color
    ) {
        $social_last = date('Y-m-d H:i:s');
        $query = "
            UPDATE social SET 
                social_nombre = '$social_nombre', 
                social_url = '$social_url', 
                social_icon = '$social_icon', 
                social_color = '$social_color',
                social_last = '$social_last'
            WHERE social_id = $social_id
        ";
        $resultset = $this->mysqlAdapter->query($query);
        if ($resultset) return true;
        return false;
    }

    public function delete(int $social_id)
    {
        $query = "DELETE FROM social WHERE social_id = $social_id";
        $resultset = $this->mysqlAdapter->query($query);
        if ($resultset) return true;
        return false;
    }
}
