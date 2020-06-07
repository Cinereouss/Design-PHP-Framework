<?php


class SlidesModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getSLides()
    {
        $result = $this->db->table('slide')->findAll();
        return $result;
    }

    public function getDonhangmoi(){
        return $this->db->table('donhang')->findWhere([
            "tinhtrang" => "Chưa xét duyệt",
        ]);
    }

    public function hienthiSlide($id, $gt)
    {
        return $this->db->table('slide')->updateById($id, [
            'active' => $gt,
        ]);
    }

    public function deleteSlide($id)
    {
        return $this->db->table('slide')->deleteById($id);
    }

    public function createSlides($mota, $hienthi, $name){
        return $this->db->table('slide')->insert([
            'alt'=>$mota,
            'active' => $hienthi,
            'img' => $name
        ]);
    }
}