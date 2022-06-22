<?php

/**
 * Class User
 * Класс для работы с пользователями
 */
class User extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Логин пользователя
     */
    public function login()
    {
        $data = array();

        if (isset($_POST) && !empty($_POST)) {
            $user_model = $this->model('user_model');
            $user = $user_model->login_user();

            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: http://' . $_SERVER['HTTP_HOST']);
                exit;
            } else {
                $data['message'] = 'Wrong login or password!';
            }
        }

        $this->view('_templates/header');
        $this->view('login', $data);
        $this->view('_templates/footer');
    }

    /**
     * Логаут пользователя
     */
    public function logout () 
    {
        session_destroy();
        header('Location: http://' . $_SERVER['HTTP_HOST']);
        exit;
    }

    /**
     * Регистрация пользователя
     */
    public function register()
    {
        if (isset($_POST) && !empty($_POST)) {
            $user_model = $this->model('user_model');
            $user_model->register_user();
        }
        $this->view('_templates/header');
        $this->view('register');
        $this->view('_templates/footer');
    }
    
    

}