<?php

require_once("Conexion.php");

class Insertar_Model
{
    private $Conexion;

    public function Insertar_Model()
    {
        $this->Conexion = Conectar::Conexion();
    }

    public function Get_Insertar()
    {

        //Variables llamadas por POST
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $numero = $_POST["numero"];
        $matricula = $_POST["matricula"];

        //Validacion
        if ($nombre == "" || $apellido == "") {
            # code...
            return false;
        } else {
            # code...
        }

        //sql
        $sql = "INSERT INTO `estudiantes`(`Nombre`, `Apellido`, `edad`,
         `Numero`, `Matricula`) VALUES (:nombre, :apellido, :edad,
          :numero , :matricula)";

        //preparacion para la sentencia sql
        $stm = $this->Conexion->prepare($sql);

        //Ejecucion del statement ya preparado
        $stm->execute(array(
            ":nombre" => $nombre,
            ":apellido" => $apellido,
            ":edad" => $edad,
            ":numero" => $numero,
            ":matricula" => $matricula,
        )) or die("Error en la ejecucion");

        //retorna la ejecucion para su funcionamiento
        return $stm;

        //Cierre de todas las conexiones
        $stm->closeCursor();
        $this->Conexion = null;
    }
}
