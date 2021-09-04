<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\ITipounidadDAO;

use Secyt\Core\model\Tipounidad;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Tipounidad
 *  
 * @author Marcos
 * 
 */
class TipounidadDoctrineDAO extends CrudDAO implements ITipounidadDAO{
	
	protected function getClazz(){
		return get_class( new Tipounidad() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('tu'))
	   				->from( $this->getClazz(), "tu");
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(tu.oid)')
	   				->from( $this->getClazz(), "tu");
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "tu.nombre like '$nombre%'");
		}
		
		
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "tu.$name";	
		}	
		
	}	
}