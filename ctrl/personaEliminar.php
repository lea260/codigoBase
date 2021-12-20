<?php

require_once '../modelo/Persona.php';
try {
    //code...

    $id      = $_GET['id'];
    $idInt   = intval($id);
    $persona = new Persona();
    $persona->eliminar($idInt);
    $session = Session::getSession();
    $lista   = $session->listar();

    require_once '../vistas/personaListar.php';

} catch (Exception $ex) {
    echo "<pre>";

    var_dump(unserialize($_SESSION['lista']));

    echo "</pre>";

}
;