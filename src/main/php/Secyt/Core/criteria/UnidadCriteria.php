<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Unidad
 *  
 * @author Marcos
 *
 */
class UnidadCriteria extends Criteria{

	private $nombre;
	
	private $codigo;

	private $tipounidad;
	
	private $padre;
	
	private $facultad;

	private $sigla;

	private $nombreSigla;

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getCodigo()
	{
	    return $this->codigo;
	}

	public function setCodigo($codigo)
	{
	    $this->codigo = $codigo;
	}

	public function getTipounidad()
	{
	    return $this->tipounidad;
	}

	public function setTipounidad($tipounidad)
	{
	    $this->tipounidad = $tipounidad;
	}

	public function getPadre()
	{
	    return $this->padre;
	}

	public function setPadre($padre)
	{
	    $this->padre = $padre;
	}

	public function getFacultad()
	{
	    return $this->facultad;
	}

	public function setFacultad($facultad)
	{
	    $this->facultad = $facultad;
	}

	public function getSigla()
	{
	    return $this->sigla;
	}

	public function setSigla($sigla)
	{
	    $this->sigla = $sigla;
	}

	public function getNombreSigla()
	{
	    return $this->nombreSigla;
	}

	public function setNombreSigla($nombreSigla)
	{
	    $this->nombreSigla = $nombreSigla;
	}
}