<?php

require_once("Conexion.php");

class Eliminar_Model
{
    private $Conexion;

    public function Eliminar_Model()
    {
        $this->Conexion = Conectar::Conexion();
    }

    public function Get_eliminar()
    {

        //Variable con el ID
        $ID = $_GET["id_Eliminar"];

        //sql sequencia
        $sql = "DELETE FROM `estudiantes` WHERE ID = '$ID'";

        //Preparacion statement
        $stm = $this->Conexion->prepare($sql);

        //Ejecucion del statement
        $stm->execute();

        //retorna todo el codigo
        return $stm;

        //limpiamos todas las conexiones abiertas
        $stm->closeCursor();
        $this->Conexion = null;
    }
}
?>
<!------------------------------------------------------------------------
<?php


?>