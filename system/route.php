<?php

class Route
{
    public function init()
    {
        // Контроллер по умолчанию
        $controller_name = 'Main';

        // Метод по умолчанию
        $method_name = 'index';

        // Разбираем URL
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $segments = explode('/', $uri['path']);

        // определение названия контроллера (задается с большой заглавной буквы)
        $controller_name = $segments[1] ? ucfirst($segments[1]) : $controller_name;

        // определение названия метода
        $method_name = isset($segments[2]) ? $segments[2] : $method_name;

        // подключение контроллера
        $controller_file = $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/' . $controller_name. '.php';

        if (file_exists($controller_file)) {
            require_once $controller_file;
        } else {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/404.php';
            return false;
        }

        // создание контроллера
        $controller = new $controller_name;

        // подключение метода
        if (method_exists($controller, $method_name)) {
            $controller->$method_name();
        }
    }
}