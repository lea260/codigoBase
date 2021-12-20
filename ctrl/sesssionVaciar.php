<?php

require_once '../modelo/Session.php';
$session = Session::getSession();
$session->vaciar();
require_once '../vistas/sesssionVaciar.php';