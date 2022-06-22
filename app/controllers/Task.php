<?php

/**
 * Class Task
 * Класс для работы с задачами
 */
class Task extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Добавление задачи
     */
    public function add()
    {
        if (isset($_POST) && !empty($_POST)) {
            $task_model = $this->model('task_model');
            if($task_model->add_task()) {
                header('Location: http://' . $_SERVER['HTTP_HOST'] );
                exit;
            }
        }
        $this->view('_templates/header');
        $this->view('add_task');
        $this->view('_templates/footer');
    }

    /**
     * Изменение задачи
     */
    public function update()
    {
        if (isset($_POST) && !empty($_POST)) {
            $task_model = $this->model('task_model');
            $result = $task_model->update_task();
            echo json_encode($result); 
        }
    }
}