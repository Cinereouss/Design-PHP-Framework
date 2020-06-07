<?php
class GlobalModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function fetchAllThuongHieu() {
        return $this->db->table('thuonghieu')->findAll();
    }

    public function fetchAllLoaiDan() {
        return $this->db->table('loaidan')->findAll();
    }

    public function getContact(){
        return $this->db->table('contact')->findAll()[0];
    }
}
