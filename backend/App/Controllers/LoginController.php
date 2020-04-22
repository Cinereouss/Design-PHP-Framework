<?php

class LoginController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Home');
    }

    public function index(){
        $this->view('Login');
    }

    public function signup(){
        $this->viewItem('Login', 'signup');
    }

    public function signup2($data = []){
        print_r($data);
        die();
    }
}