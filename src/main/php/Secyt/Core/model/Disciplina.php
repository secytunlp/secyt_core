<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Disciplina
 *
 * @Entity @Table(name="secyt_disciplina")
 */
class Disciplina extends Entity{
    

    /**
     * @var string|null
     *
     * @Column(name="codigo", type="string", length=20, nullable=true)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

	public function __construct(){
	}

	public function __toString(){
		 return $this->getNombre();
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
