<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Carrerainv
 *  
 * @author Marcos
 *
 */
class CarrerainvCriteria extends Criteria{

	
	private $nombre;
	
	

	

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}
}