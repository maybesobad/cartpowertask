<?php

/**
 * Class Controller
 */
class Controller
{
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * @return bool
     */
    public function index()
    {
        return true;
    }

    /**
     * Обработка представления
     * @param $view
     * @param array $data
     */
    public function view($view, $data = [])
    {
        $view_file = $view . '.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/' . $view_file;
    }

    /**
     * Обработка модели
     * @param $model
     * @return mixed
     */
    public function model($model)
    {
        $model_file = $model . ".php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/". $model_file;
        return new $model();
    }

    /**
     * Генерация 404
     */
    public function error_404 () 
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/404.php';
    }

    /**
     * Подключение базы данных
     * @return PDO
     */
    public function db()
    {
        $db = array();
        
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/config/db.php';
        
        try {
            $pdo = new PDO('mysql:host='. $db['hostname'] .';dbname='. $db['database'] .';charset=UTF8;',''. $db['username'] .'', ''. $db['password'] .'');
        } catch (PDOException $e) {
            echo 'DB connection fail ' . $e->getMessage();
            die();
        }
        $pdo->exec('SET NAMES utf8');
        return $pdo;

    }
}

