<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IEspecialidadDAO;

use Secyt\Core\model\Especialidad;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Especialidad
 *  
 * @author Marcos
 * 
 */
class EspecialidadDoctrineDAO extends CrudDAO implements IEspecialidadDAO{
	
	protected function getClazz(){
		return get_class( new Especialidad() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('e', 'd'))
	   				->from( $this->getClazz(), "e")
					->leftJoin('e.disciplina', 'd');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(e.oid)')
	   				->from( $this->getClazz(), "e")
					->leftJoin('e.disciplina', 'd');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
	
		
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "e.nombre like '%$nombre%'");
		}
		
		
		
		
		
		$disciplina = $criteria->getDisciplina();
		if( !empty($disciplina) && $disciplina!=null){
			if (is_object($disciplina)) {
				$disciplinaOid = $disciplina->getOid();
				if(!empty($disciplinaOid))
					$queryBuilder->andWhere( "e.disciplina= $disciplinaOid" );
			}
			else $queryBuilder->andWhere( "d.nombre like '%$disciplina%'");
			
		}
		
		
	}	
	
	protected function getFieldName($name){
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "e.$name";	
		}	
		
	}	
}