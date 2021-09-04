<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Organismo
 *
 * @Entity @Table(name="secyt_organismo")
 */
class Organismo extends Entity{
    

    /**
     * @var string|null
     *
     * @Column(name="codigo", type="string", length=20, nullable=true)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @Column(name="nombre", type="string", length=70, nullable=true)
     */
    private $nombre;

	public function __construct(){
	}

	public function __toString(){
		 return $this->getCodigo();
	}
	
	public function getCodigo()
	{
	    return $this->codigo;
	}

	public function setCodigo($codigo)
	{
	    $this->codigo = $codigo;
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
