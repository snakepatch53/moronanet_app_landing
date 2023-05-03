<?php
class UserDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM user");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $row;
        }
        return $result;
    }

    public function selectById($user_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM user WHERE user_id = $user_id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    public function login($user_user, $user_pass)
    {
        return $this->mysqlAdapter->query("
            SELECT * FROM user 
            WHERE user_user = '$user_user' AND user_pass = '$user_pass'
        ");
    }
    public function insert(
        $user_name,
        $user_user,
        $user_pass
    ) {
        return $this->mysqlAdapter->query("
            INSERT INTO user SET 
                user_name='$user_name', 
                user_user='$user_user',
                user_pass='$user_pass'
        ");
    }
    public function update(
        $user_name,
        $user_user,
        $user_pass,
        $user_id
    ) {
        return $this->mysqlAdapter->query("
            UPDATE user SET 
                user_name='$user_name', 
                user_user='$user_user',
                user_pass='$user_pass'
            WHERE user_id = $user_id 
        ");
    }
    public function delete($user_id)
    {
        return $this->mysqlAdapter->query("DELETE FROM user WHERE user_id = $user_id ");
    }
}
