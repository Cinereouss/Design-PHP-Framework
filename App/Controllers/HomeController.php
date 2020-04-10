<?php
class HomeController extends Controller {

    public function __construct()
    {
        $this->model("Home");
    }

    public function index(){
        $model = $this->model("Home");
        echo 'Controler home index get model data '.$model->test();
    }

}