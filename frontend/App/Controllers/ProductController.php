<?php
class ProductController extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = $this->model('Product');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Product',
            'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
            'Title'=>'Chi tiết sản phẩm'
        ]);
    }

    public function showDetail($idProduct) {
        $this->view('Master', [
            'Content'=>'Product',
            'DBData'=>$this->model->fetchProductDetail($idProduct),
            'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
            'Title'=>'Chi tiết sản phẩm'
        ]);
    }

}