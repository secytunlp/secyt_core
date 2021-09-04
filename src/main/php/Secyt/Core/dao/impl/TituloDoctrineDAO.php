<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\ITituloDAO;

use Secyt\Core\model\Titulo;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Titulo
 *  
 * @author Marcos
 * 
 */
class TituloDoctrineDAO extends CrudDAO implements ITituloDAO{
	
	protected function getClazz(){
		return get_class( new Titulo() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('t', 'u'))
	   				->from( $this->getClazz(), "t")
					->leftJoin('t.universidad', 'u');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(t.oid)')
	   				->from( $this->getClazz(), "t")
					->leftJoin('t.universidad', 'u');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "t.nombre like '%$nombre%'");
		}
		
		$nombre_universidad = $criteria->getNombreUniversidad();
		if( !empty($nombre_universidad) ){
			$separarConsulta = explode(' ',$nombre_universidad);
			$queryBuilder->andWhere( "u.nombre like '%$nombre_universidad%' OR t.nombre like '%$nombre_universidad%' OR (t.nombre like '%$separarConsulta[0]%' AND u.nombre like '%$separarConsulta[1]%')");
		}
		
		
		
		$universidad = $criteria->getUniversidad();
		if( !empty($universidad) && $universidad!=null){
			if (is_object($universidad)) {
				$universidadOid = $universidad->getOid();
				if(!empty($universidadOid))
					$queryBuilder->andWhere( "u.oid= $universidadOid" );
			}
			else $queryBuilder->andWhere( "u.nombre like '%$universidad%'");
			
		}
		
		$nivel = $criteria->getNivel();
		if( !empty($nivel) ){
			$queryBuilder->andWhere( "t.nivel= $nivel" );
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