<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Provincia
 *
 * @Entity @Table(name="secyt_provincia")
 */
class Provincia extends Entity{
    

    /**
     * @var string|null
     *
     * @Column(name="nombre", type="string", length=70, nullable=true)
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
