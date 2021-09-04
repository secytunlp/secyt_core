<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IEstadoIntegranteDAO;

use Secyt\Core\model\EstadoIntegrante;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para EstadoIntegrante
 *  
 * @author Marcos
 * 
 */
class EstadoIntegranteDoctrineDAO extends CrudDAO implements IEstadoIntegranteDAO{
	
	protected function getClazz(){
		return get_class( new EstadoIntegrante() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('ep'))
	   				->from( $this->getClazz(), "ep");
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(ep.oid)')
	   				->from( $this->getClazz(), "ep");
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "ep.nombre like '$nombre%'");
		}
		
		
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "ep.$name";	
		}	
		
	}	
}