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
            'data' => $this->model->getContact()
        ]);
    }
}