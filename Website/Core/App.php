<?php
class App
{
    private $controller = 'HomeController';
    private $action = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->procUrl();
        //Router Controller
        if(isset($url) && file_exists("./App/Controllers/".$url[0]."Controller.php")){
            $this->controller = $url[0]."Controller";
            unset($url[0]);
        }
        require_once ("./App/Controllers/".$this->controller.".php");
        $this->controller = new $this->controller;
        //Router Action
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->action = $url[1];
            }
            unset($url[1]);
        }

        //Process Param
        $this->params = $url ? array_values($url) : [];

        //Call Action
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    private function procUrl(){
        if(isset($_GET['url'])){
            return explode('/',filter_var(trim(trim($_GET['url'], ' '), '/')));
        }

    }
}