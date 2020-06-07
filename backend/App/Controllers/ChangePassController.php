<?php


class ChangePassController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('User');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'ChangePass',
            'Title'=>'Đổi mật khẩu',
            'Donhang'=>$this->model->getDonhangmoi(),
        ]);
    }

    public function changePassword(){
        if(isset($_POST)){
            echo $this->model->changePassword(password_hash($_POST['newPassword'], PASSWORD_BCRYPT));
        }

    }

    public function checkPassword(){
        if(isset($_POST)){
            echo $this->model->checkPassword($_POST['password']) ? 'true' : 'false';
        }
    }
}