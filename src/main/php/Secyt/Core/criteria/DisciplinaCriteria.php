<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Disciplina
 *  
 * @author Marcos
 *
 */
class DisciplinaCriteria extends Criteria{

	
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