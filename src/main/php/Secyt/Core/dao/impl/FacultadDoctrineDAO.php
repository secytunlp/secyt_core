<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IFacultadDAO;

use Secyt\Core\model\Facultad;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Facultad
 *  
 * @author Marcos
 * 
 */
class FacultadDoctrineDAO extends CrudDAO implements IFacultadDAO{
	
	protected function getClazz(){
		return get_class( new Facultad() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('f', 'c'))
	   				->from( $this->getClazz(), "f")
					->leftJoin('f.cat', 'c');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(f.oid)')
	   				->from( $this->getClazz(), "f")
					->leftJoin('f.cat', 'c');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getDs_facultad();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "f.nombre like '%$nombre%'");
		}
		
		$codigo = $criteria->getDs_codigo();
		if( !empty($codigo) ){
			$queryBuilder->andWhere( "f.codigo like '%$codigo%'");
		}
		
		
		
		$cat = $criteria->getCat();
		if( !empty($cat) && $cat!=null){
			if (is_object($cat)) {
				$catOid = $cat->getOid();
				if(!empty($catOid))
					$queryBuilder->andWhere( "c.cat_oid= $catOid" );
			}
			else $queryBuilder->andWhere( "c.nombre like '%$cat%'");
			
		}
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "f.$name";	
		}	
		
	}	
}