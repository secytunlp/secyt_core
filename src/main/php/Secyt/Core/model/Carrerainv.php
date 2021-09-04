<?php

namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Carrerainv
 *
 * @Entity @Table(name="secyt_carrerainv")
 */
class Carrerainv extends Entity{
    

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=50, nullable=false)
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
