<?php

class LoginModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function checkLogin($user, $password)
    {
        $result = ($this->db->table('user')->findWhere([
            'user' => $user,
            'pass_hash' => $password
        ]));
        return count($result) > 0 ? true : false;
    }
}