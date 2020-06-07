<?php


class DonhangController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Donhang');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Donhang',
            'Title' => 'Đơn hàng ',
            'data' => $this->model->getDonhang(),
            'Donhang'=>$this->model->getDonhangmoi(),
        ]);
    }
}