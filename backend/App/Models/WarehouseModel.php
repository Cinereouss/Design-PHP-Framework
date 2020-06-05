<?php


class WarehouseModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getProductInWarehouse()
    {
            $result = $this->db->table('sanpham')->findAll();
            foreach ($result as $item) {
                $item->thuonghieu_id = $this->db->table('thuonghieu')->findWhere([
                    'id' => $item->thuonghieu_id
                ])[0]->ten;
                $item->loaidan_id = $this->db->table('loaidan')->findWhere([
                    'id' => $item->loaidan_id
                ])[0]->ten;
            }
            return $result;
    }
}