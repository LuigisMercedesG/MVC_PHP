<?php

require_once("Conexion.php");

class Actualizar_Model
{
    private $Conexion;

    public function Actualizar_Model()
    {
        $this->Conexion = Conectar::Conexion();
    }

    public function Get_Actualizar()
    {

        //Variables del formulario
        $ID = $_POST["id_Actualizar"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $numero = $_POST["numero"];
        $matricula = $_POST["matricula"];

        //sql
        $sql = "UPDATE `estudiantes` SET `Nombre`='$nombre',
        `Apellido`='$apellido',`edad`='$edad',`Numero`='$numero',
        `Matricula`='$matricula' WHERE ID = '$ID'";

        //Preparacion de la sentencia Statement
        $stm = $this->Conexion->prepare($sql);

        //Ejecutamos la sentencia Statement
        $stm->execute();

        return $stm;

        //Cerramos todas las conexiones
        $stm->closeCursor();
        $this->Conexion = null;
    }
}
