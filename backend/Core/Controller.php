<?php
class Controller
{
    public function model($model){
        require_once ("./App/Models/".$model."Model.php");
        $model.="Model";
        return new $model;
    }

    public function view($view, $data = []){
        require_once ("./App/Views/".$view."/index.php");
    }

    public function viewItem($view, $item,  $data = []){
        require_once ("./App/Views/".$view."/".$item.".php");
    }
}