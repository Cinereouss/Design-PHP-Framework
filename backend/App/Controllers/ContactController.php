<?php


class ContactController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Contact');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Contact',
            'Title' => 'Quản lý thông tin liên hệ',
            'data' => $this->model->getContact(),
            'Donhang'=>$this->model->getDonhangmoi(),
        ]);
    }
    public function update()
    {
       if(isset($_POST)){
           echo $this->model->updateInfor($_POST['Website'], $_POST['Facebook'], $_POST['Email'], $_POST['Copyright'], $_POST['Phone'], $_POST['Content']) > 0 ?  'true' : 'false';
       }
    }
}