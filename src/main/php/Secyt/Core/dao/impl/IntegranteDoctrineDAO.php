<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IIntegranteDAO;

use Secyt\Core\model\Integrante;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Integrante
 *  
 * @author Marcos
 * 
 */
class IntegranteDoctrineDAO extends CrudDAO implements IIntegranteDAO{
	
	protected function getClazz(){
		return get_class( new Integrante() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('i', 't', 'e','p','d'))
	   				->from( $this->getClazz(), "i")
					->leftJoin('i.tipo', 't')
					->leftJoin('i.estado', 'e')
					->leftJoin('i.docente', 'd')
					->leftJoin('i.proyecto', 'p');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(i.oid)')
	   				->from( $this->getClazz(), "i")
					->leftJoin('i.tipo', 't')
					->leftJoin('i.estado', 'e')
					->leftJoin('i.docente', 'd')
					->leftJoin('i.proyecto', 'p');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
				
		$codigo = $criteria->getCodigo();
		if( !empty($codigo) ){
			$queryBuilder->andWhere( "p.codigo like '%$codigo%'");
		}
		
		
		
		$proyecto = $criteria->getProyecto();
		if( !empty($proyecto) && $proyecto!=null){
			if (is_object($proyecto)) {
				$proyectoOid = $proyecto->getOid();
				if(!empty($proyectoOid))
					$queryBuilder->andWhere( "p.oid= $proyectoOid" );
			}
			else $queryBuilder->andWhere( "p.nombre like '%$proyecto%'");
			
		}
		
		$investigador = $criteria->getInvestigador();
		if( !empty($investigador) && $investigador!=null){
			if (is_object($investigador)) {
				$investigadorOid = $investigador->getOid();
				if(!empty($investigadorOid))
					$queryBuilder->andWhere( "d.oid= $investigadorOid" );
			}
			else {
				$queryBuilder->andWhere( "d.apellido like :investigador OR d.nombre like :investigador2");
				$queryBuilder->setParameter( "investigador" , "%$investigador%" );
				//$queryBuilder->orWhere( "d.nombre like :investigador2");
				$queryBuilder->setParameter( "investigador2" , "%$investigador%" );
			}
			
		}
		
	
		
		$documento = $criteria->getDocumento();
		if( !empty($documento) ){
			$queryBuilder->andWhere( "d.documento like '%$documento%'");
		}
		
		
	}	
	
	protected function getFieldName($name){
	 	
		switch ($name) {
		 	case "proyecto":
		 		return "p.codigo";
		 	break;
		 	case "investigador":
		 		return "d.apellido,d.nombre";
		 	break;
		 	case "cuil":
		 		return "d.precuil,d.documento,d.postcuil";
		 	break;
		 	case "estado":
		 		return "e.nombre";
		 	break;
		 }
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "i.$name";	
		}	
		
	}	
}