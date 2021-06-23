<?php
require_once dirname(__FILE__) . "/BaseDao.class.php";

class UserDao extends BaseDao
{
    public function __construct()
    {
        parent::__construct("users");
    }

    public function get_user_by_email($email)
    {
        return $this->query_unique("SELECT * FROM users WHERE email=:email", ['email' => $email]);
    }

    public function get_user_by_id($id)
    {
        return $this->query_unique("SELECT * FROM users WHERE id=:id", ['id' => $id]);
    }

    public function get_user_search($search, $offset, $limit)
    {
        return $this->query("SELECT * FROM users
                                    WHERE name LIKE CONCAT('%',:name,'%') LIMIT ${limit}
                                    OFFSET ${offset}", ['name' => strtolower($search)]);
    }

    public function add_user($user)
    {
        $this->insert("users", $user);
    }

    public function update_user($id, $user)
    {
        $this->update($id, $user);
    }


}

?>