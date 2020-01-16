<?php

require_once("Conexion.php");

class Selecionar_Model
{
    private $Conexion;
    private $Resultado;

    public function Selecionar_Model()
    {
        $this->Conexion = Conectar::Conexion();
    }

    public function Get_Selecionar()
    {

        //Variable
        $ID = $_GET["id_Selecionar"];

        //sql
        $sql = "SELECT `ID`, `Nombre`, `Apellido`, `edad`, `Numero`, `Matricula`
        FROM `estudiantes` WHERE ID = '$ID'";

        //Preparamos la sentencia Statement
        $stm = $this->Conexion->prepare($sql);

        //Ejecutamos la sentencia Preparada
        $stm->execute();

        //Recuperamos el estudiante
        $this->Resultado = $stm->fetch(PDO::FETCH_BOTH);

        //Retornamos el resultado de la base de datos
        return $this->Resultado;

        //Cerramos todas las conexiones 
        $stm->closeCursor();
        $this->Conexion = null;
    }
}
