<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Titulo
 *
 * @Entity @Table(name="secyt_titulo", indexes={@Index(name="FK_secyt_titulo_secyt_universidad", columns={"universidad_oid"})})
 */
class Titulo extends Entity{
    

    /**
     * @var int
     *
     * @Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var string|null
     *
     * @Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var \Universidad
     *
     * @ManyToOne(targetEntity="Universidad")
     * @JoinColumns({
     *   @JoinColumn(name="universidad_oid", referencedColumnName="oid")
     * })
     */
    private $universidad;

	public function __construct(){
	}

	public function getNivel()
	{
	    return $this->nivel;
	}

	public function setNivel($nivel)
	{
	    $this->nivel = $nivel;
	}

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getUniversidad()
	{
	    return $this->universidad;
	}

	public function setUniversidad($universidad)
	{
	    $this->universidad = $universidad;
	}
	
	
	public function getTituloUniversidad(){
		return $this->nombre.' - '.$this->getUniversidad()->getNombre();
	}
}
