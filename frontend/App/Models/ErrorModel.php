<?php
class ErrorModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }
}