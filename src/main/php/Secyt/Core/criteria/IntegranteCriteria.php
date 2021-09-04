<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Integrante
 *  
 * @author Marcos
 *
 */
class IntegranteCriteria extends Criteria{

	private $codigo;
	
	private $proyecto;
	
	private $investigador;
	
	private $documento;
	
	

	


	

	

	public function getCodigo()
	{
	    return $this->codigo;
	}

	public function setCodigo($codigo)
	{
	    $this->codigo = $codigo;
	}

	public function getProyecto()
	{
	    return $this->proyecto;
	}

	public function setProyecto($proyecto)
	{
	    $this->proyecto = $proyecto;
	}

	public function getInvestigador()
	{
	    return $this->investigador;
	}

	public function setInvestigador($investigador)
	{
	    $this->investigador = $investigador;
	}

	public function getDocumento()
	{
	    return $this->documento;
	}

	public function setDocumento($documento)
	{
	    $this->documento = $documento;
	}
}