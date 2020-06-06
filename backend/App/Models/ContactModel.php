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
}