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
}