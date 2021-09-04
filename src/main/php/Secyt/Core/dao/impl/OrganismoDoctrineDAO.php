<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IOrganismoDAO;

use Secyt\Core\model\Organismo;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Organismo
 *  
 * @author Marcos
 * 
 */
class OrganismoDoctrineDAO extends CrudDAO implements IOrganismoDAO{
	
	protected function getClazz(){
		return get_class( new Organismo() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('o'))
	   				->from( $this->getClazz(), "o");
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(o.oid)')
	   				->from( $this->getClazz(), "o");
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "o.nombre like '$nombre%'");
		}
		
		$sigla = $criteria->getSigla();
		if( !empty($sigla) ){
			$queryBuilder->andWhere( "o.sigla like '$sigla%'");
		}
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "o.$name";	
		}	
		
	}	
}