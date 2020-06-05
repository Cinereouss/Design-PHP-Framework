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
        var_dump($_POST);
    }
}