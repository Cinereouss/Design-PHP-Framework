<?php
class ProductController extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = $this->model('Product');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Error',
            'Title'=>'Lỗi'
        ]);
    }

    public function showDetail($idProduct) {

        if(count($this->model->fetchProductDetail($idProduct)) == 0) {
            header("Location: /Error");
        }

        $this->view('Master', [
            'Content'=>'Product',
            'DBData'=>$this->model->fetchProductDetail($idProduct),
            'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
            'Title'=>'Chi tiết sản phẩm'
        ]);
    }

}