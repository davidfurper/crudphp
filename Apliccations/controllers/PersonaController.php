<?php
require_once "/Applications/XAMPP/xamppfiles/htdocs/Apliccations/model/Persona.php";
 
class PersonaController{
     public $persona;
    
     public function _construct()
    {
        $this->$persona = new Persona();
    }
    public function buscarTodas()
    {
        
        $personas = $this->persona->buscarTodas();
        include '/Applications/XAMPP/xamppfiles/htdocs/Apliccations/view/listado_persona.php';
    }


 }  