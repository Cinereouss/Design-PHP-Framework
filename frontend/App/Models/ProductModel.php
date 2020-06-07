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

    public function fetchLoaiDanThuongHieu() {
        return $this->db->findLoaiDanThuongHieu();
    }

    public function fetchAnhSanPham($idSanPham) {
        return $this->db->table('anhsp')->findWhere(['sanpham_id'=>$idSanPham]);
    }
}