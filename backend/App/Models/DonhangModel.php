<?php


class DonhangModel extends Model
{
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

    public function getDonhang(){
        return $this->db->table('donhang')->findAll();
    }
}