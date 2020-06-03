<?php
class CskhModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function addNewCustomer($email) {
        $result =  $this->db->table('cskh')->insert(['mail' => $email, 'status' => 'Chưa hỗ trợ']);
        return $result > 0;
    }

}