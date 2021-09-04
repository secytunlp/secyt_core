<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Tipounidad
 *
 * @Entity @Table(name="secyt_tipounidad")
 */
class Tipounidad extends Entity{
    

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

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
}
