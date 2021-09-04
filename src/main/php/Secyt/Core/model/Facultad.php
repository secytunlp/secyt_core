<?php

namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Facultad
 *
 * @Entity @Table(name="secyt_facultad", indexes={@Index(name="FK_secyt_facultad_secyt_cat", columns={"cat_oid"})})
 */
class Facultad extends Entity{
    

    /**
     * @var string|null
     *
     * @Column(name="codigo", type="string", length=15, nullable=true)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @Column(name="nombre", type="string", length=70, nullable=true)
     */
    private $nombre;

    /**
     * @var \Cat
     *
     * @ManyToOne(targetEntity="Cat")
     * @JoinColumns({
     *   @JoinColumn(name="cat_oid", referencedColumnName="oid")
     * })
     */
    private $cat;

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

	public function getCat()
	{
	    return $this->cat;
	}

	public function setCat($cat)
	{
	    $this->cat = $cat;
	}
}
