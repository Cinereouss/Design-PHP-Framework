<?php


class SlidesController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Slides');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Slides',
            'Title' => 'Quản lý banner website',
            'data' => $this->model->getSlides()
        ]);
    }
}