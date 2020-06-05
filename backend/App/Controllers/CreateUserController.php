<?php

class CreateUserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('User');
    }

    public function index()
    {
        $this->view('Master', [
            'Content'=>'CreateUser',
            'Title'=>'Tạo tài khoản'
        ]);
    }

    public function checkUser(){
        if(isset($_POST)){
            if ($this->model->checkUser($_POST['username'])) {
                echo 'false';
            } else {
                echo 'true';
            }
        }
    }

    public function register(){
        if(isset($_POST)){
            $user = $_POST['username'];
            $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $email = $_POST['email'];
            echo $this->model->createUser($user, $pass, $email);
        }
    }
}