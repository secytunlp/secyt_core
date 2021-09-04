<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Especialidad
 *  
 * @author Marcos
 *
 */
class EspecialidadCriteria extends Criteria{

	
	private $nombre;
	
	private $disciplina;

	

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
	    $this->disciplina = $disciplina;
	}
}