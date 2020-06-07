<?php


class DonhangModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getDonhang(){
        return $this->db->table('donhang')->findAll();
    }
}