<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Organismo
 *  
 * @author Marcos
 *
 */
class OrganismoCriteria extends Criteria{

	
	private $nombre;
	
	private $sigla;
	

	

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
}