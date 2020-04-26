<?php
class OrderController extends Controller {
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Order');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Order'
        ]);
    }
}