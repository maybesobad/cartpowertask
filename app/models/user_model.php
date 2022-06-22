<?php

/**
 * Class User_model
 * Модель для роботы с пользователем
 */
class User_model extends Model
{
    /**
     * Логин пользователя
     * @return bool|mixed
     */
    public function login_user()
    {
        $login = isset($_POST['login']) ? $_POST['login'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $pdo = $this->db();
        $query = $pdo->prepare('SELECT * FROM user WHERE login=:login ');
        $query->execute(array('login' => $login));
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if (!empty($user)) {
            if (password_verify($password, $user['password'])) { 
                return $user;
            }
        }
        
        return false;
    }

    /**
     * Регистрация пользователя
     * @return bool
     */
    public function register_user()
    {
        $login = isset($_POST['login']) ? $_POST['login'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : '';
        
        if ((empty($password) && empty($password_confirm)) || $password != $password_confirm) { return false; }
        
        $pdo = $this->db();
        $query = $pdo->prepare('INSERT INTO user (login, password) VALUES (:login, :password)');
        $result = $query->execute(array('login' => $login, 'password' => password_hash($password, PASSWORD_BCRYPT)));

        return $result;
    }

}
