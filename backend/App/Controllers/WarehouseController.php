<?php

class WarehouseController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = $this->model('Warehouse');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Warehouse',
            'Title' => 'Kho hàng',
            'data' => $this->model->getProductInWarehouse()
        ]);
    }

    public function nhaphang (){
        if($_POST){
            echo $this->model->nhaphang($_POST['id'], $_POST['soluong']) > 0 ?  'true' : 'false';
        }
    }
}