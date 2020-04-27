<?php


class SignupController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Login');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Signup'
        ]);
    }
}