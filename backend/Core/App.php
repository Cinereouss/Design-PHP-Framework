<?php

class App
{
    private $controller = 'LoginController';
    private $action = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->procUrl();

        //Router Controller
        unset($url[0]);
        unset($url[1]);
        if(count($url) > 0 && $url[2] == 'Login'){
            if (count($url) > 0 && file_exists("./App/Controllers/" . $url[2] . "Controller.php")) {
                $this->controller = $url[2] . "Controller";
                unset($url[2]);
            }
            require_once("./App/Controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
            //Router Action
            if (isset($url[3])) {
                if (method_exists($this->controller, $url[3])) {
                    $this->action = $url[3];
                }
                unset($url[3]);
            }

            //Process Param
            $this->params = $url ? array_values($url) : [];
            //Call Action
            call_user_func_array([$this->controller, $this->action], $this->params);
        }elseif (isset($_SESSION['username'])) {
            if (count($url) > 0 && file_exists("./App/Controllers/" . $url[2] . "Controller.php")) {
                $this->controller = $url[2] . "Controller";
                unset($url[2]);
            }
            require_once("./App/Controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
            //Router Action
            if (isset($url[3])) {
                if (method_exists($this->controller, $url[3])) {
                    $this->action = $url[3];
                }
                unset($url[3]);
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