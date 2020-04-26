<?php

class LoginController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Login');
    }

    public function index()
    {
        $this->view('Login');
    }

    public function login()
    {
        if (isset($_POST['btnLogin'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($this->model->checkLogin($username, $password)) {
                $_SESSION['username'] = $username;
                header('Location: ../Home');
            } else {
                echo 'Thông tin đăng nhập không đúng';
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        header('Location: ../Login');
    }
}