<?php
namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Unidad
 *
 * @Entity @Table(name="secyt_unidad", indexes={@Index(name="FK_secyt_unidad_secyt_tipounidad", columns={"tipounidad_oid"}), @Index(name="FK_secyt_unidad_secyt_facultad", columns={"facultad_oid"})})
 */
class Unidad extends Entity{
   

    /**
     * @var \Padre
     *
     * @ManyToOne(targetEntity="Unidad")
     * @JoinColumns({
     *   @JoinColumn(name="padre_oid", referencedColumnName="oid")
     * })
     */
    private $padre;

    /**
     * @var int
     *
     * @Column(name="hijos", type="smallint", nullable=false)
     */
    private $hijos = '0';

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="sigla", type="string", length=20, nullable=false)
     */
    private $sigla;

    /**
     * @var string|null
     *
     * @Column(name="direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @var string|null
     *
     * @Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @Column(name="telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var \Facultad
     *
     * @ManyToOne(targetEntity="Facultad")
     * @JoinColumns({
     *   @JoinColumn(name="facultad_oid", referencedColumnName="oid")
     * })
     */
    private $facultad;

    /**
     * @var \Tipounidad
     *
     * @ManyToOne(targetEntity="Tipounidad")
     * @JoinColumns({
     *   @JoinColumn(name="tipounidad_oid", referencedColumnName="oid")
     * })
     */
    private $tipounidad;

	public function __construct(){
	}

	public function __toString(){
		$sigla=($this->getSigla())?' ('.$this->getSigla().')':'';
		 return $this->getNombre().$sigla;
	}
	
	public function getPadre()
	{
	    return $this->padre;
	}

	public function setPadre($padre)
	{
	    $this->padre = $padre;
	}

	public function getHijos()
	{
	    return $this->hijos;
	}

	public function setHijos($hijos)
	{
	    $this->hijos = $hijos;
	}

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getSigla()
	{
	    return $this->sigla;
	}

	public function setSigla($sigla)
	{
	    $this->sigla = $sigla;
	}

	public function getDireccion()
	{
	    return $this->direccion;
	}

	public function setDireccion($direccion)
	{
	    $this->direccion = $direccion;
	}

	public function getMail()
	{
	    return $this->mail;
	}

	public function setMail($mail)
	{
	    $this->mail = $mail;
	}

	public function getTelefono()
	{
	    return $this->telefono;
	}

	public function setTelefono($telefono)
	{
	    $this->telefono = $telefono;
	}

	public function getFacultad()
	{
	    return $this->facultad;
	}

	public function setFacultad($facultad)
	{
	    $this->facultad = $facultad;
	}

	public function getTipounidad()
	{
	    return $this->tipounidad;
	}

	public function setTipounidad($tipounidad)
	{
	    $this->tipounidad = $tipounidad;
	}
	
	public function getUnidadSigla(){
		$sigla=($this->getSigla())?' ('.$this->getSigla().')':'';
		 return $this->getNombre().$sigla;
	}
	
}
