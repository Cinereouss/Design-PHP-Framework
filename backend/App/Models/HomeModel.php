<?php
class HomeModel{
    public function test(){
        return "func tesr";
    }

    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getDonhangmoi(){
        return $this->db->table('donhang')->findWhere([
            "tinhtrang" => "Chưa xét duyệt",
        ]);
    }
}