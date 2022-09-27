<?php

class businessView {

    function showClothes($clothes) {
        include './templates/header.php';    
        include './templates/form_alta.php';
        
        echo '<ul class="list-group">';
        foreach ($clothes as $cloth) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>$cloth->description</b> - $cloth->brand(talle $cloth->size) </span>
                    <span> <b>$cloth->colour</b> - $cloth->stock(precio $cloth->price) </span>
                    <a href='delete/$cloth->id_clothes' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                    <a href='upDate/$cloth->id_clothes' type='button' class='btn btn-warning ml-auto'>Actualizar</a>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.php';
    }

    function upDate2($cloth2){

        include_once "templates/header.php";
        include_once "templates/footer.php";

        ?>
            <h1>Actualizar productos</h1>
            
            <form method="POST" action= "editEnd";>
            <table>
                <tr>
                    <td>descripcion</td>
                    <td><input type = "text" name= "des2"  value=" <?php echo $cloth2->description; ?>"></td>
                </tr>
                <tr>
                    <td>marca</td>
                    <td><input type = "text" name= "mar2"  value=" <?php echo $cloth2->brand; ?>"></td>
                </tr>
                <tr>
                    <td>talle</td>
                    <td><input type = "text" name= "tal2"  value=" <?php echo $cloth2->size; ?>"></td>
                </tr>
                <td>color</td>
                    <td><input type = "text" name= "col2"  value=" <?php echo $cloth2->colour; ?>"></td>
                </tr>
                <td>precio</td>
                    <td><input type = "text" name= "pre2"  value=" <?php echo $cloth2->price; ?>"></td>
                </tr>
                <td>stock</td>
                    <td><input type = "text" name= "sto2"  value=" <?php echo $cloth2->stock; ?>"></td>
                </tr>
                
                <td><input type = "hidden" name= "id" value=" <?php echo $cloth2->id_clothes; ?>"></td>
                </tr>
               
                <tr> 
                <td><button><input type = "submit"   value=" Actualizar"></button></td>
                </tr>
            </table>
        </form>
     
<?php
    }

}