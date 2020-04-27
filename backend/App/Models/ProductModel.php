<?php

class ProductModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function insertProduct($ten, $ma, $gia, $video, $mota, $thongso)
    {
        $result = $this->db->table('sanpham')->insert([
            'ten' => $ten,
            'masp' => $ma,
            'giasp' => $gia,
            'linkvd' => $video,
            'mota' => $mota,
            'thongso' => $thongso,
            'thuonghieu_id' =>'1',
            'loaidan_id' => '1',
        ]);
        return $result > 0 ? true : false;
    }

    public function getProduct(){
        $result = $this->db->table('sanpham')->findAll();
        foreach ($result as $item){
            $item->thuonghieu_id = $this->db->table('thuonghieu')->findWhere([
                'id'=>$item->thuonghieu_id
            ])[0]->ten;
        }
        return $result;
    }
}