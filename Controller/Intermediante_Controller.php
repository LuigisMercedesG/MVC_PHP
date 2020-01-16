<?php
require_once("Model/Resultado_Model.php");

//Devuelveme todos los estudiantes de la base de datos---------------
$ListaEstudiantes = new Resultado_Model();
$MatrizEstudiantes = $ListaEstudiantes->Get_Resultados();


//Inserta Nuevos estudiantes a la base de datos----------------------
if (isset($_POST["insertar"])) {

    require_once("Model/Insertar_Model.php");

    $nuevosEstudiantes = new Insertar_Model();
    $nuevosEstudiantes->Get_Insertar();

    header("Location:index.php");
} else {
    # code...
}

//Eliminar los estudiantes de la base de datos------------------------
if (isset($_GET["id_Eliminar"])) {

    require_once("Model/Eliminar_Model.php");

    $EliminaEstudiante = new Eliminar_Model();
    $EliminaEstudiante->Get_eliminar();

    header("Location:index.php");
} else {
    # code...
}

//Selecionamos el estudiantes para su Actualizacion--------------------
if (isset($_GET["id_Selecionar"])) {

    require_once("Model/Selecionar_Model.php");

    $SelecionarEstudiante = new Selecionar_Model();
    $Estudiante = $SelecionarEstudiante->Get_Selecionar();
} else {
    # code...
}

//Actualizamos los estudiantes de la base de datos--------------------
if (isset($_POST["Actualizar"])) {

    require_once("Model/Actualizar_Model.php");

    $ActualizarEstudiante = new Actualizar_Model();
    $ActualizarEstudiante->Get_Actualizar();

    header("Location:index.php");
} else {
    # code...
}

//redirecionamiento de las paginas------------------------------------

if (isset($SelecionarEstudiante)) {
    require_once("View/Actualizar_Vistas.php");
} else {
    require_once("View/Estudiantes_Vistas.php");
}
