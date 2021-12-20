<?php

require_once 'Session.php';
class Persona
{
    private $id;
    private $nombre;
    private $edad;
    //private static $listaPersonas = null;
    private static $idAux = 7;

    public function __construct($id = 1, $nombre = "", $edad = "")
    {
        if ($edad < 0) {
            throw new Exception("la edad no puede ser negativa");
        }
        $this->id     = $id;
        $this->nombre = $nombre;
        $this->edad   = $edad;
        self::$idAux++;

    }

    /* public static function inicio()
    {
    if (self::$lista == null) {
    self::$lista = [0 => new Persona(5, "juan", 14),
    1 => new Persona(6, "pedro", 21)];
    }
    }*/

    //public static iniciar(){
    //self::$lista=[
    //      0=>new Persona(5,"juan",14)]
    //}

    public static function listar()
    {
        $singleton = Singleton::getSession();
        $lista     = $singleton->listaPersonas();
        return $lista;
    }
    public function nuevo()
    {
        //self::$lista[] = $this;

        $singleton = Session::getSession();
        $singleton->agregarPersona($this);
        //$singleton->listar()[] = $this;

    }

    public function obtenerPorId($id)
    {
        //self::$lista[] = $this;
        $session = Session::getSession();
        $persona = $session->obtenerPersonaId($id);
        //$singleton->listar()[] = $this;
        return $persona;
    }

    /**
     * Get the value of id
     */
    public function generarId()
    {
        return $this->id = self::$idAux;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    public function modificar()
    {
        //self::$lista[] = $this;
        //var_dump($this);
        $singleton = Session::getSession();
        $singleton->modificarPersona($this);
        //$singleton->listar()[] = $this;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

    }

    public function eliminar($id)
    {
        //self::$lista[] = $this;
        //var_dump($this);
        $singleton = Session::getSession();
        $singleton->eliminarPersona($id);
        //$singleton->listar()[] = $this;
    }

};