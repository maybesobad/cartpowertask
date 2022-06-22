<?php


class Model
{
    public function db()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/config/db.php';

        try {
            $db_conn = new PDO('mysql:host='. HOSTNAME .';dbname='. DATABASE .';', ''. USERNAME .'', ''. PASSWORD .'');
        } catch (PDOException $e) {
            echo 'DB connection fail ' . $e->getMessage();
            die();
        }
        return $db_conn;

    }


}