<?php
class OrderModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function fetchProductDetail($idProduct) {
        return $this->db->table('sanpham')->findWhere(['id' => $idProduct]);
    }

    public function insertDataToKhachHangAndReturnId ($data = []) {
        return $this->db->table('khachhang')->insertAndReturnId($data);
    }

    public function insertDataToDonHangAndReturnId ($data = []) {
        return $this->db->table('donhang')->insertAndReturnId($data);
    }

    public function insertDataToChiTietDonHang ($data = []) {
        return $this->db->table('chitietdonhang')->insert($data) > 0;
    }
}