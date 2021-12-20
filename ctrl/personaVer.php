<?php

require_once '../modelo/Persona.php';
try {
    //code...
    //var_dump($_GET);
    $id    = $_GET['id'];
    $idInt = intval($id);
    /*$nombre  = $_POST['nombre'];
    $persona = new Persona(1, $nombre, $edad);
    $persona->generarId();
    $persona->nuevo();*/
    //$singleton = Session::getSession();
    $model   = new Persona();
    $persona = $model->obtenerPorId($idInt);
    if ($persona == null) {
        throw new Exception("no se aha encontrado la persona");
    }
    require_once '../vistas/personaVer.php';

} catch (Exception $ex) {
    echo $ex->getMessage();
    echo "<pre>";

    var_dump(unserialize($_SESSION['lista']));

    echo "</pre>";

}
;