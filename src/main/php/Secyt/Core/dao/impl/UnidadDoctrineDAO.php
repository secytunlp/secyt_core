<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IUnidadDAO;

use Secyt\Core\model\Unidad;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Unidad
 *  
 * @author Marcos
 * 
 */
class UnidadDoctrineDAO extends CrudDAO implements IUnidadDAO{
	
	protected function getClazz(){
		return get_class( new Unidad() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('u'))
	   				->from( $this->getClazz(), "u")
					->leftJoin('u.padre', 'p');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(u.oid)')
	   				->from( $this->getClazz(), "u")
					->leftJoin('u.padre', 'p');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "u.nombre like '%$nombre%'");
		}
		
		$codigo = $criteria->getCodigo();
		if( !empty($codigo) ){
			$queryBuilder->andWhere( "u.codigo like '%$codigo%'");
		}
		
		$sigla = $criteria->getSigla();
		if( !empty($sigla) ){
			$queryBuilder->andWhere( "u.sigla like '%$sigla%'");
		}
		
		$nombre_sigla = $criteria->getNombreSigla();
		if( !empty($nombre_sigla) ){
			$queryBuilder->andWhere( "u.sigla like '%$nombre_sigla%' OR u.nombre like '%$nombre_sigla%'");
		}
		
		$padre = $criteria->getPadre();
		if( !empty($padre) && $padre!=null){
			if (is_object($padre)) {
				$padreOid = $padre->getOid();
				if(!empty($padreOid))
					$queryBuilder->andWhere( "p.oid= $padreOid" );
			}
			else $queryBuilder->andWhere( "p.nombre like '%$padre%'");
			
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