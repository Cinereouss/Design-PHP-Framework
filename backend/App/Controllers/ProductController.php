<?php
class ProductController extends Controller{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Product');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Product',
            'data'=>$this->model->getProduct()
        ]);
    }


    public function createProduct(){
        if(isset($_POST) && isset($_POST['btnSubmit'])){
           $ten = $_POST['product-name'];
           $ma = $_POST['product-id'];
           $gia = $_POST['product-price'];
           $video = $_POST['product-video'];
           $mota = $_POST['description'];
           $thongso = $_POST['product-specs'];
           if($this->model->insertProduct($ten, $ma, $gia, $video, $mota, $thongso)){
               return $this->index();
           }
           else{
               echo 'thất bại';
           }
        }
    }
}