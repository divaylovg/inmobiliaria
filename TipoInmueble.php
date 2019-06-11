<?php
/**
 * Created by PhpStorm.
 * User: dani
 * Date: 19/04/19
 * Time: 17:25
 */

class TipoInmueble
{

    protected $tipo;

    public function __construct($tipo=null)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return null
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param null $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }



}