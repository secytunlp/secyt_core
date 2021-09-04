<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\ITipoAcreditacionDAO;

use Secyt\Core\model\TipoAcreditacion;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para TipoAcreditacion
 *  
 * @author Marcos
 * 
 */
class TipoAcreditacionDoctrineDAO extends CrudDAO implements ITipoAcreditacionDAO{
	
	protected function getClazz(){
		return get_class( new TipoAcreditacion() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('t'))
	   				->from( $this->getClazz(), "t");
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(t.oid)')
	   				->from( $this->getClazz(), "t");
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "t.nombre like '$nombre%'");
		}
		
		
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "t.$name";	
		}	
		
	}	
}