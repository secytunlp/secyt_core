<?php
namespace Secyt\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de Proyecto
 *  
 * @author Marcos
 *
 */
class ProyectoCriteria extends Criteria{

	private $codigo;
	
	private $year;
	
	private $tipoAcreditacion;
	
	private $facultad;
	
	private $estado;

	private $fechaDesde;
	
	private $fechaHasta;

	private $director;
	

	public function getCodigo()
	{
	    return $this->codigo;
	}

	public function setCodigo($codigo)
	{
	    $this->codigo = $codigo;
	}

	public function getYear()
	{
	    return $this->year;
	}

	public function setYear($year)
	{
	    $this->year = $year;
	}

	public function getTipoAcreditacion()
	{
	    return $this->tipoAcreditacion;
	}

	public function setTipoAcreditacion($tipoAcreditacion)
	{
	    $this->tipoAcreditacion = $tipoAcreditacion;
	}

	public function getFacultad()
	{
	    return $this->facultad;
	}

	public function setFacultad($facultad)
	{
	    $this->facultad = $facultad;
	}

	public function getEstado()
	{
	    return $this->estado;
	}

	public function setEstado($estado)
	{
	    $this->estado = $estado;
	}

	public function getFechaDesde()
	{
	    return $this->fechaDesde;
	}

	public function setFechaDesde($fechaDesde)
	{
	    $this->fechaDesde = $fechaDesde;
	}

	public function getFechaHasta()
	{
	    return $this->fechaHasta;
	}

	public function setFechaHasta($fechaHasta)
	{
	    $this->fechaHasta = $fechaHasta;
	}

    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }
}