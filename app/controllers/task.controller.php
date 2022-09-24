<?php
require_once './app/models/task.model.php';
require_once './app/views/task.view.php';

class TaskController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    public function showTasks() {
        $tareas = $this->model->getAllTasks();
        $this->view->showTasks($tareas);
    }

    
    function addTask() {
        // TODO: validar entrada de datos

        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        $id = $this->model->insertTask($title, $description, $priority);

        header("Location: " . BASE_URL); 
    }
   
    function deleteTask($id) {
        $this->model->deleteTaskById($id);
        header("Location: " . BASE_URL);
    }



    function upDateTask($id) {
        $task2=$this->model->upDateTaskById($id);
        $this->view->UpDate2($task2);
        
    }
    function EditEnd() {
        // TODO: validar entrada de datos

        $tit2= $_POST['tit2'];
        $des2= $_POST['des2'];
        $pri2= $_POST['pri2'];
        $com2=$_POST['com2'];
        $id= $_POST['id'];
        
        $id = $this->model->editEnd2($tit2, $des2, $pri2,$com2,$id);

        
    }
   

    
}
