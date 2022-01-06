<?php

class DB
{
    private $conexion;
    function _construct()
    {
        try{
            $this->conexion = new PDO('mysql:host=localhost;dbname=bdprueba','root','');
            
        }
        catch(PDOException $e){
            $this->conexion = null;
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    function getConexion()
    {
        return $this->conexion;
    }
}