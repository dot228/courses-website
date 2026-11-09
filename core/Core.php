<?php

namespace core;

use controllers\MainController;

class Core
{
    public $db;
    private static $instance = null;
    public $pageParams;
    public $app;
    public $requestMethod;
    private function __construct()
    {
        $this -> app = [];
        $this -> pageParams = [];
    }
    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function Initialize()
    {
        session_start();
        $this->db = new DB(DATABASE_HOST, DATABASE_LOGIN,DATABASE_PASSWORD, DATABASE_BASENAME);
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];

    }
    public function Run() {
        $route = $_GET['route'];
        $routeParts = explode('/', $route);
        $moduleName = strtolower(array_shift($routeParts));
        $actionName = strtolower(array_shift($routeParts));
        if(empty($moduleName))
            $moduleName = "info";
        if(empty($actionName))
            $actionName = "index";
        $this->app['moduleName'] = $moduleName;
        $this->app['actionName'] = $actionName;
        $controllerName = '\\controllers\\'.ucfirst($moduleName).'Controller';
        $controllerActionName = $actionName.'Action';
        $statusCode = 200;
        if(class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $controllerActionName))
            {
                $this->pageParams['content'] = $controller->$controllerActionName();
            }
            else {$statusCode = 404;}
        }
        else {$statusCode = 404;}
        if(intval($statusCode / 100) == 4 || intval($statusCode / 100) == 5) {
            $mainController = new MainController();
            $mainController->errorAction(404);
        }


    }
    public function Done()
    {
        $pathToLayOut = 'themes/dark/layout.php';
        $tpl = new Template($pathToLayOut);
        $tpl->setParams($this->pageParams);
        $html = $tpl->getHTML();
        echo $html;
    }

}