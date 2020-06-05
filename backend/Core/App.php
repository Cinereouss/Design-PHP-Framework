<?php

class App
{
    private $controller = 'UserController';
    private $action = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->procUrl();
        unset($url[0]);
        //Router Controller
        if(isset($url[1]) > 0 && $url[1] == 'User'){
            if (count($url) > 0 && file_exists("./App/Controllers/" . $url[1] . "Controller.php")) {
                $this->controller = $url[1] . "Controller";
            }
            unset($url[1]);
            require_once("./App/Controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
            //Router Action
            if (isset($url[2])) {
                if (method_exists($this->controller, $url[2])) {
                    $this->action = $url[2];
                }
                unset($url[2]);
            }
            //Process Param
            $this->params = $url ? array_values($url) : [];
            //Call Action
            call_user_func_array([$this->controller, $this->action], $this->params);
        }elseif (isset($_SESSION['username'])) {
            if (isset($url) > 0 && file_exists("./App/Controllers/" . $url[1] . "Controller.php")) {
                $this->controller = $url[1] . "Controller";
                unset($url[1]);
            }
            require_once("./App/Controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
            //Router Action
            if (isset($url[2])) {
                if (method_exists($this->controller, $url[2])) {
                    $this->action = $url[2];
                }
                unset($url[2]);
            }

            //Process Param
            $this->params = $url ? array_values($url) : [];
            //Call Action
            call_user_func_array([$this->controller, $this->action], $this->params);
        }else{
            require_once("./App/Controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
            //Call Action
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }

    private function procUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim(trim($_GET['url'], ' '), '/')));
        }

    }
}