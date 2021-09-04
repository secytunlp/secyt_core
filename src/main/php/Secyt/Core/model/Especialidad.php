<?php

namespace Secyt\Core\model;

use Cose\model\impl\Entity;
use Secyt\Core\utils\SecytUtils;

/**
 * Especialidad
 *
 * @Entity @Table(name="secyt_especialidad", indexes={@Index(name="FK_secyt_especialidad_secyt_disciplina", columns={"disciplina_oid"})})
 */
class Especialidad extends Entity{
    

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
     * @var \Disciplina
     *
     * @ManyToOne(targetEntity="Disciplina")
     * @JoinColumns({
     *   @JoinColumn(name="disciplina_oid", referencedColumnName="oid")
     * })
     */
    private $disciplina;

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

	public function getDisciplina()
	{
	    return $this->disciplina;
	}

	public function setDisciplina($disciplina)
	{
	    $this->disciplina = $cat;
	}
}
