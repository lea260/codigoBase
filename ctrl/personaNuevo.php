<?php

require_once '../modelo/Persona.php';
try {
    //code...
    //var_dump($_POST);
    $edad    = $_POST['edad'];
    $nombre  = $_POST['nombre'];
    $persona = new Persona(1, $nombre, $edad);
    $persona->generarId();
    $persona->nuevo();
    $session = Session::getSession();
    $lista   = $session->listar();

    require_once '../vistas/personaListar.php';

} catch (Exception $ex) {
    echo "<pre>";

    var_dump(unserialize($_SESSION['lista']));

    echo "</pre>";

}
;