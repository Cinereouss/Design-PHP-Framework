<?php


class XulydonhangController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Xulydonhang');
    }

    public function index($id){
        $this->view('Master', [
            'Content'=>'Xulydonhang',
            'Title'=>'Đổi mật khẩu',
            'Donhang'=>$this->model->getDonhangmoi(),
            'Data'=>$this->model->getDonhangInfo($id)
        ]);
    }

    public function viewInfo($id){
        $this->view('Master', [
            'Content'=>'Xulydonhang',
            'Title'=>'Đổi mật khẩu',
            'Donhang'=>$this->model->getDonhangmoi(),
            'Data'=>$this->model->getDonhangInfo($id)
        ]);
    }

}