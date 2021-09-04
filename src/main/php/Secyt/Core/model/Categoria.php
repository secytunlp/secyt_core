<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Categoria
 *
 * @Entity @Table(name="secyt_categoria")
 */
class Categoria extends Entity{
    

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=5, nullable=false)
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
