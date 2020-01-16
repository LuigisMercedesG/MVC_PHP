<?php

require_once("Conexion.php");

class Resultado_Model
{
    private $Conexion;
    private $Resultados;

    public function Resultado_Model()
    {
        $this->Conexion = Conectar::Conexion();
        $this->Resultados = array();
    }

    public function Get_Resultados()
    {
        //sql para tomar todos los datos de la base de datos
        $sql = "SELECT * FROM `estudiantes`";

        //Preparacion de la sentencia sql
        $stm = $this->Conexion->prepare($sql) or die("error al preparar la Sentencia sql.");

        if ($stm == false) {
            # code...
            echo "la preparacion esta mal";
        } else {
            # code...
        }

        //Ejecutamos el statemen 
        $stm->execute(array());

        //Obtenemos todos los datos de la base de datos 
        $this->Resultados = $stm->fetchAll(PDO::FETCH_BOTH);

        // retornamos el array
        return $this->Resultados;

        //Cierre de todas las conexiones
        $stm->closeCursor();
        $this->Conexion = null;
    }
}
