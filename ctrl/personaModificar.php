<?php

require_once '../modelo/Persona.php';
try {
    //code...

    $id      = $_POST['id'];
    $edad    = $_POST['edad'];
    $nombre  = $_POST['nombre'];
    $idInt   = intval($id);
    $edadInt = intval($edad);
    $persona = new Persona($idInt, $nombre, $edadInt);
    $persona->modificar();
    $session = Session::getSession();
    $lista   = $session->listar();

    require_once '../vistas/personaListar.php';

} catch (Exception $ex) {
    echo "<pre>";

    var_dump(unserialize($_SESSION['lista']));

    echo "</pre>";

}
;