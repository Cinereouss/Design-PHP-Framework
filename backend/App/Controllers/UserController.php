<?php

class UserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('User');
    }

    public function index()
    {
        $this->view('User');
    }



    public function userLogin()
    {
        if (isset($_POST) ){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($this->model->checkLogin($username, $password)) {
                $_SESSION['username'] = $username;
                echo 'true';
            } else {
                echo 'false';
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        header('Location: ../Login');
    }
}