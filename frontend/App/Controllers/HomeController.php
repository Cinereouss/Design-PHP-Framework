<?php
//cai nay e dung framework a?
//Khong a, em viet bang tay tu dau a, em voi bạn hieu viet
class HomeController extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = $this->model('Home');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Home',
            'DBData'=>$this->model->fetchAllProduct(),
            'Slides'=>$this->model->fetchAllSlides(),
            'Title'=>'Trang chủ Guitar H2D'
        ]);
    }

    public function sortPrice($typeOrder) {
        $this->view('Master', [
            'Content'=>'Home',
            'DBData'=>$this->model->fetchProductOrderByPrice($typeOrder),
            'Slides'=>$this->model->fetchAllSlides(),
            'Title'=>'Trang chủ Guitar H2D'
        ]);
    }

}