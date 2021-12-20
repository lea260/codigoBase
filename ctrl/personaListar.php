<?php

require_once '../modelo/Persona.php';
require_once '../modelo/Session.php';

//recibo los parametros
//llamo al modelo

$session = Session::getSession();
$lista   = $session->listar();

require_once '../vistas/personaListar.php';