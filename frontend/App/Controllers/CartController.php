<?php
class CartController extends Controller {
    private $model;

    public function __construct(){

    }

    public function index(){
        $this->view('Master', ['Content' => 'Cart']);
    }
}