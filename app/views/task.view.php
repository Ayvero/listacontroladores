<?php

class TaskView {

    function showTasks($tasks) {
        include './templates/header.php';    
        include './templates/form_alta.php';
        
        echo '<ul class="list-group">';
        foreach ($tasks as $task) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>$task->title</b> - $task->description(prioridad $task->priority) </span>
                    <a href='delete/$task->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                    <a href='upDate/$task->id' type='button' class='btn btn-warning ml-auto'>Actualizar</a>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
    }

    function upDate2($task2){
        include_once "templates/header.php";
        include_once "templates/footer.php";

        ?>
            <h1>Editar tareas</h1>
            
            <form method="POST" action= "editEnd";>
            <table>
                <tr>
                    <td>titulo</td>
                    <td><input type = "text" name= "tit2"  value=" <?php echo $task2->title; ?>"></td>
                </tr>
                <tr>
                    <td>descripcion</td>
                    <td><input type = "text" name= "des2"  value=" <?php echo $task2->description; ?>"></td>
                </tr>
                <tr>
                    <td>prioridad</td>
                    <td><input type = "text" name= "pri2"  value=" <?php echo $task2->priority; ?>"></td>
                </tr>
                <tr>
                    <td>completada</td>
                    <td><input type = "text" name= "com2"  value=" <?php echo $task2->completed; ?>"></td>
                </tr>
                <tr>
                    <td><input type = "hidden" name= "id" value=" <?php echo $task2->id; ?>"></td>
                </tr>
               
                <tr> 
                <td><button><input type "submit"   value=" Editar tarea"></button></td>
                </tr>
            </table>
        </form>
     
<?php
    }

}