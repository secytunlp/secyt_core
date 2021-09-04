<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IProyectoDAO;

use Secyt\Core\model\Proyecto;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Proyecto
 *  
 * @author Marcos
 * 
 */
class ProyectoDoctrineDAO extends CrudDAO implements IProyectoDAO{
	
	protected function getClazz(){
		return get_class( new Proyecto() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('p', 't', 'f','i'))
	   				->from( $this->getClazz(), "p")
					->leftJoin('p.tipoAcreditacion', 't')
					->leftJoin('p.estado', 'e')
					->leftJoin('p.facultad', 'f')
					->leftJoin('p.integrantes', 'i', 'WITH', 'i.tipo = 1');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(p.oid)')
	   				->from( $this->getClazz(), "p")
					->leftJoin('p.tipoAcreditacion', 't')
					->leftJoin('p.estado', 'e')
					->leftJoin('p.facultad', 'f')
					->leftJoin('p.integrantes', 'i', 'WITH', 'i.tipo = 1');
    				
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
				
		$codigo = $criteria->getCodigo();
		if( !empty($codigo) ){
			$queryBuilder->andWhere( "p.codigo like '%$codigo%'");
		}
		
		
		
		$tipoAcreditacion = $criteria->getTipoAcreditacion();
		if( !empty($tipoAcreditacion) && $tipoAcreditacion!=null){
			if (is_object($tipoAcreditacion)) {
				$tipoAcreditacionOid = $tipoAcreditacion->getOid();
				if(!empty($tipoAcreditacionOid))
					$queryBuilder->andWhere( "t.oid= $tipoAcreditacionOid" );
			}
			else $queryBuilder->andWhere( "t.nombre like '%$tipoAcreditacion%'");
			
		}
		
		$facultad = $criteria->getFacultad();
		if( !empty($facultad) && $facultad!=null){
			if (is_object($facultad)) {
				$facultadOid = $facultad->getOid();
				if(!empty($facultadOid))
					$queryBuilder->andWhere( "f.oid= $facultadOid" );
			}
			else $queryBuilder->andWhere( "f.nombre like '%$facultad%'");
			
		}
		
		
		$estado = $criteria->getEstado();
		if( !empty($estado) && $estado!=null){
			if (is_object($estado)) {
				$estadoOid = $estado->getOid();
				if(!empty($estadoOid))
					$queryBuilder->andWhere( "e.oid= $estadoOid" );
			}
			else $queryBuilder->andWhere( "e.nombre like '%$estado%'");
			
		}
		
		$fechaDesde = $criteria->getFechaDesde();
		
		if( !empty($fechaDesde) ){
			$queryBuilder->andWhere( "p.inicio >= '" . $fechaDesde->format("Y-m-d") . "'");
		}
	
		$fechaHasta = $criteria->getFechaHasta();
		if( !empty($fechaHasta) ){
			$queryBuilder->andWhere( "p.inicio <= '" . $fechaHasta->format("Y-m-d") . "'");
		}
		
		$director = $criteria->getDirector();
		if( !empty($director) && $director!=null){
			if (is_object($director)) {
				$directorOid = $director->getOid();
				if(!empty($directorOid))
					$queryBuilder->andWhere( "i.docente= $directorOid" );
			}
			else $queryBuilder->andWhere( "f.nombre like '%$director%'");
			
		}
		
	}	
	
	protected function getFieldName($name){
	 	
		switch ($name) {
		 	case "tipoAcreditacion":
		 		return "t.nombre";
		 	break;
		 	case "facultad":
		 		return "f.nombre";
		 	break;
		 	case "estado":
		 		return "e.nombre";
		 	break;
		 }
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "p.$name";	
		}	
		
	}	
}