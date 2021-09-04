<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Cargo
 *
 * @Entity @Table(name="secyt_cargo")
 */
class Cargo extends Entity{
    
	
    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @Column(name="orden", type="integer", nullable=true)
     */
    private $orden;


	public function __construct(){
	}

	public function __toString(){
		 return $this->getNombre();
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
