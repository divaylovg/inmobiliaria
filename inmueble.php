<?php
/**
 * Created by PhpStorm.
 * User: dani
 * Date: 2/05/19
 * Time: 12:40
 */

class inmueble
{
    protected $tipo;
    protected $id;
    protected $alquiler;
    protected $venta;
    protected $habitaciones;
    protected $metros;
    protected $provincia;
    protected $ciudad;
    protected $calle;
    protected $cp;
    protected $numero;
    protected $puerta;
    protected $piso;
    protected $telefonoPropietario;
    protected $descripcion;
    protected $ascensor;
    protected $foto1;
    protected $foto2;
    protected $foto3;
    protected $foto4;
    protected $foto5;

    /**
     * inmueble constructor.
     * @param $tipo
     * @param $id
     * @param $alquiler
     * @param $venta
     * @param $habitaciones
     * @param $metros
     * @param $provincia
     * @param $ciudad
     * @param $calle
     * @param $cp
     * @param $numero
     * @param $puerta
     * @param $piso
     * @param $telefonoPropietario
     * @param $descripcion
     * @param $ascensor
     * @param $foto1
     * @param $foto2
     * @param $foto3
     * @param $foto4
     * @param $foto5
     */
    public function __construct($tipo=null, $id=null, $alquiler=null, $venta=null, $habitaciones=null, $metros=null, $provincia=null, $ciudad=null, $calle=null, $cp=null, $numero=null, $puerta=null, $piso=null, $telefonoPropietario=null, $descripcion=null, $ascensor=null, $foto1=null, $foto2=null, $foto3=null, $foto4=null, $foto5=null)
    {
        $this->tipo = $tipo;
        $this->id = $id;
        $this->alquiler = $alquiler;
        $this->venta = $venta;
        $this->habitaciones = $habitaciones;
        $this->metros = $metros;
        $this->provincia = $provincia;
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->cp = $cp;
        $this->numero = $numero;
        $this->puerta = $puerta;
        $this->piso = $piso;
        $this->telefonoPropietario = $telefonoPropietario;
        $this->descripcion = $descripcion;
        $this->ascensor = $ascensor;
        $this->foto1 = $foto1;
        $this->foto2 = $foto2;
        $this->foto3 = $foto3;
        $this->foto4 = $foto4;
        $this->foto5 = $foto5;
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

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getAlquiler()
    {
        return $this->alquiler;
    }

    /**
     * @param null $alquiler
     */
    public function setAlquiler($alquiler): void
    {
        $this->alquiler = $alquiler;
    }

    /**
     * @return null
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * @param null $venta
     */
    public function setVenta($venta): void
    {
        $this->venta = $venta;
    }

    /**
     * @return null
     */
    public function getHabitaciones()
    {
        return $this->habitaciones;
    }

    /**
     * @param null $habitaciones
     */
    public function setHabitaciones($habitaciones): void
    {
        $this->habitaciones = $habitaciones;
    }

    /**
     * @return null
     */
    public function getMetros()
    {
        return $this->metros;
    }

    /**
     * @param null $metros
     */
    public function setMetros($metros): void
    {
        $this->metros = $metros;
    }

    /**
     * @return null
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param null $provincia
     */
    public function setProvincia($provincia): void
    {
        $this->provincia = $provincia;
    }

    /**
     * @return null
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param null $ciudad
     */
    public function setCiudad($ciudad): void
    {
        $this->ciudad = $ciudad;
    }

    /**
     * @return null
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * @param null $calle
     */
    public function setCalle($calle): void
    {
        $this->calle = $calle;
    }

    /**
     * @return null
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param null $cp
     */
    public function setCp($cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param null $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return null
     */
    public function getPuerta()
    {
        return $this->puerta;
    }

    /**
     * @param null $puerta
     */
    public function setPuerta($puerta): void
    {
        $this->puerta = $puerta;
    }

    /**
     * @return null
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * @param null $piso
     */
    public function setPiso($piso): void
    {
        $this->piso = $piso;
    }

    /**
     * @return null
     */
    public function getTelefonoPropietario()
    {
        return $this->telefonoPropietario;
    }

    /**
     * @param null $telefonoPropietario
     */
    public function setTelefonoPropietario($telefonoPropietario): void
    {
        $this->telefonoPropietario = $telefonoPropietario;
    }

    /**
     * @return null
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param null $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return null
     */
    public function getAscensor()
    {
        return $this->ascensor;
    }

    /**
     * @param null $ascensor
     */
    public function setAscensor($ascensor): void
    {
        $this->ascensor = $ascensor;
    }

    /**
     * @return null
     */
    public function getFoto1()
    {
        return $this->foto1;
    }

    /**
     * @param null $foto1
     */
    public function setFoto1($foto1): void
    {
        $this->foto1 = $foto1;
    }

    /**
     * @return null
     */
    public function getFoto2()
    {
        return $this->foto2;
    }

    /**
     * @param null $foto2
     */
    public function setFoto2($foto2): void
    {
        $this->foto2 = $foto2;
    }

    /**
     * @return null
     */
    public function getFoto3()
    {
        return $this->foto3;
    }

    /**
     * @param null $foto3
     */
    public function setFoto3($foto3): void
    {
        $this->foto3 = $foto3;
    }

    /**
     * @return null
     */
    public function getFoto4()
    {
        return $this->foto4;
    }

    /**
     * @param null $foto4
     */
    public function setFoto4($foto4): void
    {
        $this->foto4 = $foto4;
    }

    /**
     * @return null
     */
    public function getFoto5()
    {
        return $this->foto5;
    }

    /**
     * @param null $foto5
     */
    public function setFoto5($foto5): void
    {
        $this->foto5 = $foto5;
    }





}