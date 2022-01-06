<?php
require_once "/Applications/XAMPP/xamppfiles/htdocs/Apliccations/model/DB.php";

class Persona{  
    private $id,$nombre,$edad;

public function _construct($id=null, $nombre=null, $edad=null)
{
    $this->id = $id;
    $this->nombre = $nombre;
    $this->edad = $edad;
}
public function getId(){return $this->id;}
public function getNombre(){return $this->nombre;}
public function getEdad(){return $this->edad;}

public function setId($id){ $this->id = $id;}
public function setNombre($nombre){$this->nombre = $nombre;}
public function setEdad($edad){$this->edad = $edad;}

public function crear(){}
public function editar(){}
public function eliminar(){}
public function buscarPorId(){}
public function buscarTodas(){
    $db = new DB();
    $query = 'select id,nombre,edad from personas';
    $sentencia = $db->getConexion()->prepare($query);
    $sentencia->execute();
    $rs = $sentencia->fetchAll();
    foreach($rs as $fila){
        $personas[] = new Persona($fila["id"],$fila["nombre"],$fila["edad"]);   
    }
    return $personas;
}

}