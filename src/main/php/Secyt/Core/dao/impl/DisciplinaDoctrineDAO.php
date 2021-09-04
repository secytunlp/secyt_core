<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IDisciplinaDAO;

use Secyt\Core\model\Disciplina;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Disciplina
 *  
 * @author Marcos
 * 
 */
class DisciplinaDoctrineDAO extends CrudDAO implements IDisciplinaDAO{
	
	protected function getClazz(){
		return get_class( new Disciplina() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('d'))
	   				->from( $this->getClazz(), "d");
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(d.oid)')
	   				->from( $this->getClazz(), "d");
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "d.nombre like '$nombre%'");
		}
		
		
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "d.$name";	
		}	
		
	}	
}