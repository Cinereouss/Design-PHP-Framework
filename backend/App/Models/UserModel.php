<?php

class UserModel extends Model
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
        ]));
        return password_verify($password, $result[0]->pass_hash);
    }

    public function checkUser($user)
    {
        $result = ($this->db->table('user')->findWhere([
            'user' => $user,
        ]));
        return count($result) > 0 ? true : false;
    }

    public function createUser($user, $pass, $email)
    {
        $result = $this->db->table('user')->insert([
            'user' => $user,
            'pass_hash' => $pass,
            'mail' => $email,
        ]);
        return $result > 0 ? "true" : "false";
    }

    public function changePassword($newPass){
        $user = $this->db->table('user')->findWhere([
            'user' => $_SESSION['username']
        ]);
        $result = $this->db->table('user')->updateById( $user[0]->id,[
            'pass_hash' => $newPass,
        ]);
        return $result > 0 ? "true" : "false";
    }

    public function checkPassword($password){
        $result = $this->db->table('user')->findWhere([
            'user' => $_SESSION['username'],
        ]);
        return password_verify($password, $result[0]->pass_hash);
    }
}