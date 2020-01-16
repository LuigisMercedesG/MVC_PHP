<?php

class Conectar
{

    public static function Conexion()
    {
        try {

            //code...
            $conexion = new PDO("mysql:host=localhost;dbname=universidad","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            //throw $e
            echo "Error: " . $e->getLine();
            die("Error: " . $e->getMessage());
        }
        
        return $conexion;
        
    }
}
