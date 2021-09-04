<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IIntegranteEstadoDAO;

use Secyt\Core\model\IntegranteEstado;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;



/**
 * dao para IntegranteEstado
 *  
 * @author Marcos
 * 
 */
class IntegranteEstadoDoctrineDAO extends CrudDAO implements IIntegranteEstadoDAO{
	
	protected function getClazz(){
		return get_class( new IntegranteEstado() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('ie', 't', 'e','i'))
	   				->from( $this->getClazz(), "ie")
					->leftJoin('ie.tipo', 't')
					->leftJoin('ie.estado', 'e')
					
					->leftJoin('ie.integrante', 'i');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(ie.oid)')
	   				->from( $this->getClazz(), "ie")
					->leftJoin('ie.tipo', 't')
					->leftJoin('ie.estado', 'e')
					
					->leftJoin('ie.integrante', 'i');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
				
		
		
		
		
		$integrante = $criteria->getIntegrante();
		if( !empty($integrante) && $integrante!=null){
			if (is_object($integrante)) {
				$integranteOid = $integrante->getOid();
				if(!empty($integranteOid))
					$queryBuilder->andWhere( "i.oid= $integranteOid" );
			}
			else $queryBuilder->andWhere( "i.nombre like '%$integrante%'");
			
		}
		
		$hastaNull = $criteria->getHastaNull();
		if( !empty($hastaNull) ){
			$queryBuilder->andWhere($queryBuilder->expr()->isNull('ie.hasta'));
		}
		
		
	}	
	
	protected function getFieldName($name){
	 	
		switch ($name) {
		 	
		 	
		 	case "estado":
		 		return "e.nombre";
		 	break;
		 }
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "ie.$name";	
		}	
		
	}	
}