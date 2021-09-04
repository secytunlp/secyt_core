<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de IntegranteEstado
 *  
 * @author Marcos
 *
 */
class IntegranteEstadoCriteria extends Criteria{


	
	private $integrante;
	
	private $hastaNull;
	
	

	


	

	

	

	public function getIntegrante()
	{
	    return $this->integrante;
	}

	public function setIntegrante($integrante)
	{
	    $this->integrante = $integrante;
	}

	

	public function getHastaNull()
	{
	    return $this->hastaNull;
	}

	public function setHastaNull($hastaNull)
	{
	    $this->hastaNull = $hastaNull;
	}
}