<?php

class ProductController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Product');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Product',
            'Title' => 'Kho hàng và sản phẩm',
            'data' => $this->model->getProduct()
        ]);
    }


    public function createOrEdit()
    {
        if (isset($_POST['Confirm'])) {
            $content = 'Thêm mới sản phẩm';
            echo json_encode([
                'Header' => '<h2 style="">Thêm mới sản phẩm</h2>',
                'Body' => $content
            ]);
        }
    }

}