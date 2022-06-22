<?php

/**
 * Модель для работы с задачами
 */
class Task_model extends Model
{
    /**
     * Выборка списка задач
     * @return array
     */
    public function get_task_list()
    {
        $order = isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'id';
        $order_type = $order == 'status' ? 'DESC' : 'ASC';

        $pdo = $this->db();
        $query = $pdo->prepare("SELECT * FROM task ORDER BY $order $order_type");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    /**
     * Добавление задачи
     * @return bool
     */
    public function add_task ()
    {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $task = isset($_POST['task']) ? $_POST['task'] : '';
        $image_name = '';

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $file = $_FILES['image']['tmp_name'];
            $image_type = $_FILES['image']['type'];

            list($orig_width, $orig_height) = getimagesize($file);

            $width = $orig_width;
            $height = $orig_height;

            if ($height > 240) {
                $width = (240 / $height) * $width;
                $height = 240;
            }

            if ($width > 320) {
                $height = (320 / $width) * $height;
                $width = 320;
            }

            $image = imagecreatetruecolor($width, $height);

            switch($image_type) {
                case "image/jpeg":
                    $file = imagecreatefromjpeg($file);
                    break;
            }

            imagecopyresampled($image, $file, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height);
            $image_name = uniqid() . '.jpg';
            $image_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/images/';
            imagejpeg($image,  $image_path . $image_name);
        }

        $pdo = $this->db();
        $query = $pdo->prepare('INSERT INTO task (name, email, task, image) VALUES (:name, :email, :task, :image)');
        $result = $query->execute(array(
            'name' => $name,
            'email' => $email,
            'task' => $task,
            'image' => $image_name,
        ));
        return $result;
    }

    /**
     * Изменение задачи
     * @return bool
     */
    public function update_task()
    {
        $id = isset($_POST['id']) ? $_POST['id']: '';
        $status = isset($_POST['status']) ? $_POST['status']: '';

        $pdo = $this->db();
        $query = $pdo->prepare('UPDATE task SET status=:status WHERE id=:id');
        $result = $query->execute(array(
            'id' => $id,
            'status' => $status,
        ));

        return $result;
    }
}
