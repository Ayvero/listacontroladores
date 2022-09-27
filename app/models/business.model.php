<?php

class businessModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=business;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllClothes() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM clothes");
        $query->execute();

        // 3. obtengo los resultados
        $clothes = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $clothes;
    }

    /**
     * Inserta una tarea en la base de datos.
     */
    public function insertClothes($des, $marca, $talle,$color, $stock,$precio) {
        $query = $this->db->prepare("INSERT INTO clothes (description, brand, size, colour,stock, price) VALUES (?, ?, ?, ?,?,?)");
        $query->execute([$des, $marca, $talle,$color, $stock,$precio]);

        return $this->db->lastInsertId();
    }


    /**
     * Elimina una tarea dado su id.
     */
    function deleteClothesById($id) {
        $query = $this->db->prepare('DELETE FROM clothes WHERE id = ?');
        $query->execute([$id]);
    }


    function upDateClothesById($id){
        $sentencia= $this-> db->prepare("SELECT *FROM clothes WHERE id =?;");
        $sentencia->execute([$id]);
        $clot2= $sentencia->fetch(PDO:: FETCH_OBJ);
        return $clot2;
    
    }

    function editEnd2( $des2,$mar2,$tal2,$col2, $pre2, $sto2,$id) {
        $sentencia=$this->db->prepare('UPDATE clothes SET  description = ?, brand= ?, = ?, size = ?, colour=?, price=?, stock= ? WHERE id = ?; ');
        $sentencia->execute ([$des2,$mar2,$tal2,$col2, $pre2, $sto2,$id]);
        
        header("Location: " . BASE_URL); 
       
        
    }
    

    

}
