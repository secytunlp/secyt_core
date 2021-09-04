<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Cargo
 *  
 * @author Marcos
 *
 */
class CargoCriteria extends Criteria{

	
	private $nombre;
	
	private $orden;

	

	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}

	public function getOrden()
	{
	    return $this->orden;
	}

	public function setOrden($orden)
	{
	    $this->orden = $orden;
	}
}