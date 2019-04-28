<?php
/**
 * Created by PhpStorm.
 * User: dani
 * Date: 19/04/19
 * Time: 17:25
 */

class Persona
{

    protected $id;
    protected $usuario;
    protected $nombre;
    protected $telefono;
    protected $correo;
    protected $contra;
    protected $apellido;

    /**
     * Persona constructor.
     * @param $id
     * @param $usuario
     * @param $nombre
     * @param $telefono
     * @param $correo
     * @param $contra
     * @param $dni
     */
    public function __construct($id=null, $usuario=null, $nombre=null, $telefono=null, $correo=null, $contra=null, $apellido=null)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->contra = $contra;
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getContra()
    {
        return $this->contra;
    }

    /**
     * @param mixed $contra
     */
    public function setContra($contra): void
    {
        $this->contra = $contra;
    }

    /**
     * @return null
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param null $apellido
     */
    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }




}