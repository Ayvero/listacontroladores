<?php
require_once './app/models/business.model.php';
require_once './app/views/business.view.php';

class businessController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new businessModel();
        $this->view = new businessView();
    }

    public function showClothes() {
        $clothes = $this->model->getAllClothes();
        $this->view->showClothes($clothes);
    }

    
    function addClothes() {
        // TODO: validar entrada de datos

        $des = $_POST['descripcion'];
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $color = $_POST['color'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];

        $id = $this->model->insertClothes($des, $marca, $talle,$color, $stock,$precio);

        header("Location: " . BASE_URL); 
    }
   
    function deleteClothes($id) {
        $this->model->deleteClothesById($id);
        header("Location: " . BASE_URL);
    }



    function upDateClothes($id) {
        $cloth2=$this->model->upDateClothesById($id);
        $this->view->UpDate2($cloth2);
        
    }
    function EditEnd() {
        // TODO: validar entrada de datos

        $des2= $_POST['des2'];
        $mar2= $_POST['mar2'];
        $tal2= $_POST['tal2'];
        $col2=$_POST['col2'];
        $pre2=$_POST['pre2'];
        $sto2=$_POST['sto2'];
        $id=$_POST['id'];

        
        
        $id = $this->model->editEnd2( $des2,$mar2,$tal2,$col2, $pre2, $sto2,$id);

        
    }
   

    
}
