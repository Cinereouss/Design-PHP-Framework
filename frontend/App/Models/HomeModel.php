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

    public function fetchProductOrderByPrice($typeOrder) {
        $typeSql = '';

        if($typeOrder == 'low-high'){
            $typeSql = 'ASC';
        } elseif ($typeOrder == 'high-low'){
            $typeSql = 'DESC';
        }

        return $this->db->table('sanpham')->findAllInOrder('giasp', $typeSql);
    }
}