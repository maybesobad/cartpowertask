<?php

// Подключаем классы и маршрутизацию
spl_autoload_register(function($classes) {
    require_once $classes . '.php';
});

$app = new Route;
$app->init();






