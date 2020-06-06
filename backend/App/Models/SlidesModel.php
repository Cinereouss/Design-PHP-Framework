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
}