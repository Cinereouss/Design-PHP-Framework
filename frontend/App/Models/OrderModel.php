<?php
class OrderModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function showProductDetail($idProduct) {
        return $this->db->table('sanpham')->findWhere(['id' => $idProduct]);
    }

}