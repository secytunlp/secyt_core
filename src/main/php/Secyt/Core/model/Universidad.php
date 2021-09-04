<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Universidad
 *
 * @Entity @Table(name="secyt_universidad")
 */
class Universidad extends Entity{
   

    /**
     * @var int
     *
     * @Column(name="jurisdiccion", type="integer", nullable=false)
     */
    private $jurisdiccion;

    /**
     * @var string|null
     *
     * @Column(name="nombre", type="string", length=70, nullable=true)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

	public function __construct(){
	}

	public function __toString(){
		 return $this->getNombre();
	}
	
	public function getJurisdiccion()
	{
	    return $this->jurisdiccion;
	}

	public function setJurisdiccion($jurisdiccion)
	{
	    $this->jurisdiccion = $jurisdiccion;
	}

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getOrden()
	{
	    return $this->orden;
	}

	public function setOrden($orden)
	{
	    $this->orden = $orden;
	}
}
