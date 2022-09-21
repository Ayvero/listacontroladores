<?php

class TaskView {

    function showTasks($tasks) {
        include './templates/header.php';    
        include './templates/form_alta.php';
        
        echo '<ul class="list-group">';
        foreach ($tasks as $task) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>$task->titulo</b> - $task->descripcion (prioridad $task->prioridad) </span>
                    <a href='delete/$task->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
    }
}