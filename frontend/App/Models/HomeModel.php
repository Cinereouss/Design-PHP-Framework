<?php
class HomeModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function fetchAllProduct() {
        return $this->db->table('sanpham')->findSomeFields(['id', 'image', 'ten', 'giasp', 'tomtat']);
    }

    public function fetchAllSlides() {
        return $this->db->table('slide')->findAll();
    }

    public function fetchAllFilteredProductPerPage($thuonghieu_id, $loaidan_id, $sortType, $page, $limit) {
        if($thuonghieu_id == 0) {
            $thuonghieu_id = '%';
        }

        if($loaidan_id == 0) {
            $loaidan_id = '%';
        }

        $start = ($page - 1) * $limit;

        return $this->db->table('sanpham')->limit($limit)->offset($start)->findAllFilteredProductsForSort($thuonghieu_id, $loaidan_id, $sortType);
    }

    public function countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) {
        if($thuonghieu_id == 0) {
            $thuonghieu_id = '%';
        }

        if($loaidan_id == 0) {
            $loaidan_id = '%';
        }

        return count($this->db->table('sanpham')->findAllFilteredProductsForSort($thuonghieu_id, $loaidan_id, $sortType));
    }

    public function countTotalRecord() {
        return $this->db->table('sanpham')->countRecord();
    }

    public function fetchAllProductPerPage($page, $limit) {
        $start = ($page - 1) * $limit;
        return $this->db->table('sanpham')->limit($limit)->offset($start)->findSomeFields(['id', 'image', 'ten', 'giasp', 'tomtat']);
    }

    public function fetchLoaiDanThuongHieu() {
        return $this->db->findLoaiDanThuongHieu();
    }

    public function getContact(){
        return $this->db->table('contact')->findAll()[0];
    }
}