<?php
class ProductModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function fetchProductDetail($idProduct) {
        return $this->db->table('sanpham')->findWhere(['id'=>$idProduct]);
    }
}