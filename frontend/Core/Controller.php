<?php
class Controller
{
    public function model($model){
        require_once ("./App/Models/".$model."Model.php");
        $model.="Model";
        return new $model;
    }

    public function view($view, $data = []){
        $globalDataObj = $this->model('Global');
        $arrThuongHieu = $globalDataObj->fetchAllThuongHieu();
        $arrLoaiDan = $globalDataObj->fetchAllLoaiDan();

        require_once ("./App/Views/".$view."/index.php");
    }
}