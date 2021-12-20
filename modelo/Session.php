<?php
session_start();
require_once 'Persona.php';
class Session
{
    private function __construct()
    {}

    public static function getSession()
    {
        $lista = [];
        if (!isset($_SESSION['lista'])) {
            $lista = [0 => new Persona(5, "juan", 14),
                1 => new Persona(6, "pedro", 21)];
            $_SESSION['lista'] = serialize($lista);
            $_SESSION['id']    = 6;
        }
        return new Session();
    }

    public function listar()
    {
        $lista = unserialize($_SESSION['lista']);
        return $lista;
    }
    public function agregarPersona($persona)
    {
        //$this->listaPersonas[] = $persona;
        //$_SESSION['personas']= ;
        $lista = unserialize($_SESSION['lista']);
        $idAux = intval($_SESSION['id']);
        $idAux++;
        $persona->setId($idAux);
        $_SESSION['id'] = $idAux;
        array_push($lista, $persona);
        $_SESSION['lista'] = serialize($lista);
    }
    public function vaciar()
    {
        unset($_SESSION['lista']);
    }
    public function obtenerPersonaId($id)
    {
        $lista      = unserialize($_SESSION['lista']);
        $i          = 0;
        $persona    = null;
        $encontrado = false;
        while ($i < count($lista) && !$encontrado) {
            # code...
            if ($lista[$i]->getId() == $id) {
                $persona    = $lista[$i];
                $encontrado = true;
            }
            $i++;
        }
        return $persona;
    }
    public function modificarPersona($persona)
    {
        $lista = unserialize($_SESSION['lista']);
        $i     = 0;
        //$persona    = null;
        $encontrado = false;
        var_dump($persona);
        while ($i < count($lista) && !$encontrado) {
            # code...
            if ($lista[$i]->getId() == $persona->getId()) {
                //$persona = new Persona();
                $lista[$i]->setNombre($persona->getNombre());
                $lista[$i]->setEdad($persona->getEdad());
                $encontrado = true;
            }
            $i++;
        }
        $_SESSION['lista'] = serialize($lista);
        return $persona;
    }
    public function eliminarPersona($id)
    {
        $lista = unserialize($_SESSION['lista']);
        $i     = 0;
        //$persona    = null;
        $encontrado = false;
        $indice     = -1;
        while ($i < count($lista) && !$encontrado) {
            # code...
            if ($lista[$i]->getId() == $id) {
                //$persona = new Persona();
                $encontrado = true;
                $indice     = $i;
            }
            $i++;
        }
        array_splice($lista, $indice, 1);
        $_SESSION['lista'] = serialize($lista);
        return $encontrado;
    }
};