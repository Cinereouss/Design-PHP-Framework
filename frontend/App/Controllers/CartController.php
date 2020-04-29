<?php
class
CartController extends Controller {
    private $model;

    public function __construct(){
        $this->model = $this->model('Cart');
    }

    public function index(){
        $this->view('Master', [
            'Content' => 'Cart',
            'Title'=>'Thông tin giỏ hàng',
            'DBData'=>$this->model->showCartDetail()
        ]);
    }

    public function add($idProduct) {
        $this->model->addToCart($idProduct);
        header('Location: /Cart/index');
    }
}