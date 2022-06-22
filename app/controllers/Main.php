<?php

/**
 * Class Main
 * Основной класс
 */
class Main extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Вывод списка задач на главную
     */
    public function index()
    {
        $task_model = $this->model('task_model');
        $data['task_list'] = $task_model->get_task_list();
        
        $this->view('_templates/header');
        $this->view('main', $data);
        $this->view('_templates/footer');
    }

}