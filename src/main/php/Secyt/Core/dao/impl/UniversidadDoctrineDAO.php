<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IUniversidadDAO;

use Secyt\Core\model\Universidad;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Universidad
 *  
 * @author Marcos
 * 
 */
class UniversidadDoctrineDAO extends CrudDAO implements IUniversidadDAO{
	
	protected function getClazz(){
		return get_class( new Universidad() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('u'))
	   				->from( $this->getClazz(), "u");
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(u.oid)')
	   				->from( $this->getClazz(), "u");
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "u.nombre like '$nombre%'");
		}
		
		
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "u.$name";	
		}	
		
	}	
}