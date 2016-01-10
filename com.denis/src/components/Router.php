<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 08.12.2015
 * Time: 10:44
 */
class Router
{
    private $path;

    private $args = array();

    function setPath($path){
        $path = trim($path,'/\\');
        $path .=DIRSEP;

        if(is_dir($path) == false){
            throw new Exception('Invalid controller path: `'.$path.'``');
        }
        $this->path = $path;
    }

    private function getController(&$file, &$controller, &$action, &$args) {

        $route = (empty($_GET['route'])) ? '' : $_GET['route'];
        if (empty($route)) {
            $route = 'main';
        }

        // Получаем раздельные части
        $route = trim($route, '/\\');
        $parts = explode('/', $route);

        // Находим правильный контроллер
        $cmd_path = $this->path;

        foreach ($parts as $part) {
            $fullPath = $cmd_path . $part;

            // Есть ли папка с таким путём?
            if (is_dir($fullPath)) {
                $cmd_path .= $part . DIRSEP;
                array_shift($parts);
                continue;
            }

            // Находим файл
            if (is_file($fullPath . '.php')) {
                $controller = $part;
                array_shift($parts);
                break;
            }
        }

        //контроллер по умолчанию
        if (empty($controller)) {
            $controller = 'main';
        }

        // Получаем действие
        $action = array_shift($parts);

        //действие по умолчанию
        if (empty($action)) {
            $action = 'index';
        }

        $file = $cmd_path . $controller . '.php';
        $args = $parts;
    }

    function delegate() {

        // Анализируем путь
        $this->getController($file, $controller, $action, $args);

        // Файл доступен?
        if (is_readable($file) == false) {
            require_once('../views/404_view.php');
            die;
            //die ('404 Not Found');
        }

        // Подключаем файл
        require_once ($file);

        // Создаём экземпляр контроллера
        $class = 'Controller_' . $controller;
        $controller = new $class();

        // Действие доступно?
        if (is_callable(array($controller, $action)) == false) {
            require_once('../views/404_view.php');
            die;
            //die ('404 Not Found');
        }

        // Выполняем действие
        $controller->$action();
    }
}