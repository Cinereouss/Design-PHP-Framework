<?php
class ErrorController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Error');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Error',
            'Title' => 'Lỗi'
        ]);
    }
}