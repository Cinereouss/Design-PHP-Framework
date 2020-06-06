<?php
class SearchModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function fetchProductDetailResultPerPage($keyword, $page, $limit, $order) {
        $start = ($page - 1) * $limit;;

        return $this->db->table('sanpham')->limit($limit)->offset($start)->findLikeAnOrder('ten', $keyword, $order);
    }

    public function countSearchResultRecord($keyword, $order) {
        return count($this->db->table('sanpham')->findLikeAnOrder('ten', $keyword, $order));
    }

    public function fetchAllFilteredProductPerPage($thuonghieu_id, $loaidan_id, $sortType, $page, $limit) {
        if($thuonghieu_id == 0) {
            $thuonghieu_id = '%';
        }

        if($loaidan_id == 0) {
            $loaidan_id = '%';
        }

        $start = ($page - 1) * $limit;

        return $this->db->table('sanpham')->limit($limit)->offset($start)->findAllFilteredProducts($thuonghieu_id, $loaidan_id, $sortType);
    }

    public function countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) {
        if($thuonghieu_id == 0) {
            $thuonghieu_id = '%';
        }

        if($loaidan_id == 0) {
            $loaidan_id = '%';
        }

        return count($this->db->table('sanpham')->findAllFilteredProducts($thuonghieu_id, $loaidan_id, $sortType));
    }

    public function fetchLoaiDanThuongHieu() {
        return $this->db->findLoaiDanThuongHieu();
    }

    public function fetchAllFilteredProductPerPageForAnd($thuonghieu_id, $loaidan_id, $sortType, $page, $limit) {
        if($thuonghieu_id == 0) {
            $thuonghieu_id = '%';
        }

        if($loaidan_id == 0) {
            $loaidan_id = '%';
        }

        $start = ($page - 1) * $limit;

        return $this->db->table('sanpham')->limit($limit)->offset($start)->findAllFilteredProductsforAnd($thuonghieu_id, $loaidan_id, $sortType);
    }
}