<?php
class HomeController extends Controller{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Home');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Dashboard'
        ]);
    }
}