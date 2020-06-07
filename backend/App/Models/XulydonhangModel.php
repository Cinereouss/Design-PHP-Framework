<?php


class XulydonhangModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getDonhangInfo($id)
    {
        $result = $this->db->table('Donhang')->findWhere([
            'id'=>$id
        ]);
        return $result;
    }

    public function getDonhangmoi(){
        return $this->db->table('donhang')->findWhere([
            "tinhtrang" => "Chưa xét duyệt",
        ]);
    }
}