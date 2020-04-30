<?php
class OrderController extends Controller {
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Order');
    }


    public function index(){
        $this->view('Master', [
            'Content'=>'Order',
            'Title'=>'Đăng kí đặt mua'
        ]);
    }

    public function buyOne($idProduct) {
        $this->view('Master', [
            'Content'=>'OrderOne',
            'DBData'=>$this->model->fetchProductDetail($idProduct),
            'Title'=>'Đăng kí đặt mua'
        ]);
    }
}