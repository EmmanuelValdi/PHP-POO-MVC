<?php
require_once 'model/persona.model.php';

class personaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new persona();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/persona.php';
        require_once 'view/footer.php';
       
    }
    
    public function Crud(){
        $cliente = new persona();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/persona-editar.php';
        
    }
    
    public function Guardar(){
        $cliente = new persona();
        
        $cliente-> id = $_REQUEST['id'];
        $cliente-> name = $_REQUEST['name'];
        $cliente-> position = $_REQUEST['position'];
        $cliente-> office = $_REQUEST['office'];
        $cliente-> age = $_REQUEST['age'];  
        $cliente-> salary = $_REQUEST['salary'];    
      

        $cliente->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}