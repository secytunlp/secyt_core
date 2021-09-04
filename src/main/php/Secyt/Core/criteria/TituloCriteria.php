<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Titulo
 *  
 * @author Marcos
 *
 */
class TituloCriteria extends Criteria{

	private $nombre;
	
	private $nivel;

	private $universidad;
	
	private $nombreUniversidad;
	

	

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getNivel()
	{
	    return $this->nivel;
	}

	public function setNivel($nivel)
	{
	    $this->nivel = $nivel;
	}

	public function getUniversidad()
	{
	    return $this->universidad;
	}

	public function setUniversidad($universidad)
	{
	    $this->universidad = $universidad;
	}

	public function getNombreUniversidad()
	{
	    return $this->nombreUniversidad;
	}

	public function setNombreUniversidad($nombreUniversidad)
	{
	    $this->nombreUniversidad = $nombreUniversidad;
	}
}