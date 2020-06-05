<?php

class ProductModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function createProduct($ten, $ma, $gia, $video, $mota, $thongso, $thuonghieu, $loaidan, $tomtat, $hienthi)
    {
        $result = $this->db->table('sanpham')->insert([
            'ten' => $ten,
            'masp' => $ma,
            'giasp' => $gia,
            'linkvd' => $video,
            'mota' => $mota,
            'thongso' => $thongso,
            'thuonghieu_id' => $thuonghieu,
            'loaidan_id' => $loaidan,
            'tomtat' => $tomtat,
            'soluong' => '0',
            'hienthi' => $hienthi,
            'status' => 'Hàng mới định nghĩa',
        ]);
        if ($result > 0) {
            return $this->db->getLastId();
        }
    }

    public function updateImgAvt($id, $nameFile)
    {
        return $this->db->table('sanpham')->updateById($id, [
            'image' => $nameFile
        ]);
    }

    public function upImg($id, $nameImg)
    {
        return $this->db->table('anhsp')->insert([
            'sanpham_id' => $id,
            'link' => $nameImg,
            'alt' => 'Hình-ảnh-sản-phẩm' . $id
        ]);
    }

    public function deleteProduct($id)
    {
        $imgs = $this->db->table('anhsp')->findWhere([
            'sanpham_id' => $id,
        ]);
        foreach ($imgs as $img) {
            $this->db->table('anhsp')->deleteById($img->id);
        }

        $ctdonhangs = $this->db->table('chitietdonhang')->findWhere([
            'sanpham_id' => $id,
        ]);
        foreach ($ctdonhangs as $ctdonhang) {
            $donhangs = $this->db->table('donhang')->findWhere([
                'id' => $ctdonhang->donhang_id,
            ]);
            $this->db->table('chitietdonhang')->deleteById($ctdonhang->id);
            foreach ($donhangs as $donhang) {
                $spds = $this->db->table('chitietdonhang')->findWhere([
                    'donhang_id' => $donhang->id,
                ]);
                if (count($spds) <= 1 && isset($spds[0])) {
                    $this->db->table('donhang')->deleteById($spds[0]->donhang_id);
                }
            }
        }
        return $this->db->table('sanpham')->deleteById($id);
    }

    public function getProduct()
    {
        $result = $this->db->table('sanpham')->findAll();
        foreach ($result as $item) {
            $item->thuonghieu_id = $this->db->table('thuonghieu')->findWhere([
                'id' => $item->thuonghieu_id
            ])[0]->ten;
            $item->loaidan_id = $this->db->table('loaidan')->findWhere([
                'id' => $item->loaidan_id
            ])[0]->ten;
        }
        return $result;
    }

    public function getAllLoai()
    {
        return $this->db->table('loaidan')->findAll();
    }

    public function getAllThuonghieu()
    {
        return $this->db->table('thuonghieu')->findAll();
    }
}