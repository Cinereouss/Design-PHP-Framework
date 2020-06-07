<?php


class ContactModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getContact()
    {
        $result = $this->db->table('contact')->findAll();
        return $result;
    }

    public function updateInfor($web, $fb, $email, $diachi, $phone, $info){
        return $this->db->table('contact')->updateById(1, [
            'website'=>$web,
            'facebook'=>$fb,
            'email'=>$email,
            'diachi'=>$diachi,
            'phone'=>$phone,
            'infor'=>$info,
        ]);
    }
}