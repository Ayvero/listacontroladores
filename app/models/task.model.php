<?php

class TaskModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=lista;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllTasks() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM tasks");
        $query->execute();

        // 3. obtengo los resultados
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tasks;
    }

    /**
     * Inserta una tarea en la base de datos.
     */
    public function insertTask($title, $description, $priority) {
        $query = $this->db->prepare("INSERT INTO tasks (title, description, priority, completed) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $description, $priority, false]);

        return $this->db->lastInsertId();
    }


    /**
     * Elimina una tarea dado su id.
     */
    function deleteTaskById($id) {
        $query = $this->db->prepare('DELETE FROM tasks WHERE id = ?');
        $query->execute([$id]);
    }


    function upDateTaskById($id){
        $sentencia= $this-> db->prepare("SELECT *FROM tasks WHERE id =?;");
        $sentencia->execute([$id]);
        $task2= $sentencia->fetch(PDO:: FETCH_OBJ);
        return $task2;
    
    }

    function editEnd2($tit2, $des2, $pri2, $com2,$id) {
        $sentencia=$this->db->prepare('UPDATE tasks SET  title = ?, description= ?, priority= ?, completed = ? WHERE id = ?; ');
        $sentencia->execute ([$tit2, $des2, $pri2, $com2, $id]);
        
        header("Location: " . BASE_URL); 
       
        
    }
    


}
