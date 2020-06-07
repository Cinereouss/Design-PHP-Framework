<?php


class XulydonhangModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getDonhangInfo($id)
    {
        $result = $this->db->table('donhang')->findWhere([
            'id'=>$id
        ]);
        return $result;
    }

    public function getDonhangmoi(){
        return $this->db->table('donhang')->findWhere([
            "tinhtrang" => "Chưa xét duyệt",
        ]);
    }

    public function getKhachhangInfo($id){
        return $this->db->table('khachhang')->findWhere([
            "id" => $id
        ]);
    }

    public function huydon($id){
        return $this->db->table('donhang')->updateById( $id,[
            "tinhtrang" => 'Đã hủy'
        ]);
    }

    public function xacnhan($id){
        return $this->db->table('donhang')->updateById( $id,[
            "tinhtrang" => 'Đã gửi'
        ]);
    }

    public function updateSl($id, $x){
        return $this->db->table('sanpham')->updateById( $id,[
            "soluong" => $x
        ]);
    }

    public function getSp($id){
        return $this->db->table('sanpham')->getInfo($id);
    }
}