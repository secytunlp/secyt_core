<?php
namespace Secyt\Core\dao\impl;

use Secyt\Core\dao\IDocenteDAO;

use Secyt\Core\model\Docente;

use Cose\Crud\dao\impl\CrudDAO;

use Cose\criteria\ICriteria;

use Cose\exception\DAOException;
use Doctrine\ORM\QueryBuilder;

/**
 * dao para Docente
 *  
 * @author Marcos
 * 
 */
class DocenteDoctrineDAO extends CrudDAO implements IDocenteDAO{
	
	protected function getClazz(){
		return get_class( new Docente() );
	}
	
	protected function getQueryBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select(array('d', 'c', 'f'))
	   				->from( $this->getClazz(), "d")
					->leftJoin('d.categoria', 'c')
					->leftJoin('d.facultad', 'f');
		
					
		return $queryBuilder;
	}

	protected function getQueryCountBuilder(ICriteria $criteria){
		
		$queryBuilder = $this->getEntityManager()->createQueryBuilder();
		
		$queryBuilder->select('count(d.oid)')
	   				->from( $this->getClazz(), "d")
					->leftJoin('d.categoria', 'c')
					->leftJoin('d.facultad', 'f');
								
		return $queryBuilder;
	}

	protected function enhanceQueryBuild(QueryBuilder $queryBuilder, ICriteria $criteria){
				
		$nombre = $criteria->getNombre();
		if( !empty($nombre) ){
			$queryBuilder->andWhere( "d.nombre like '%$nombre%'");
		}
		
		$apellido = $criteria->getApellido();
		if( !empty($apellido) ){
			$queryBuilder->andWhere( "d.apellido like '%$apellido%'");
		}
		
		$documento = $criteria->getDocumento();
		if( !empty($documento) ){
			$queryBuilder->andWhere( "d.documento like '%$documento%'");
		}
		
		$categoria = $criteria->getCategoria();
		if( !empty($categoria) && $categoria!=null){
			if (is_object($categoria)) {
				$categoriaOid = $categoria->getOid();
				if(!empty($categoriaOid))
					$queryBuilder->andWhere( "c.oid= $categoriaOid" );
			}
			else $queryBuilder->andWhere( "c.nombre like '%$categoria%'");
			
		}
		
		$facultad = $criteria->getFacultad();
		if( !empty($facultad) && $facultad!=null){
			if (is_object($facultad)) {
				$facultadOid = $facultad->getOid();
				if(!empty($facultadOid))
					$queryBuilder->andWhere( "f.oid= $facultadOid" );
			}
			else $queryBuilder->andWhere( "f.nombre like '%$facultad%'");
			
		}
		
		
	}	
	
	protected function getFieldName($name){
	 	
		switch ($name) {
		 	case "categoria":
		 		return "c.nombre";
		 	break;
		 	case "facultad":
		 		return "f.nombre";
		 	break;
		 	case "cuil":
		 		return "d.precuil,d.documento,d.postcuil";
		 	break;
		 }
		
		$hash = array();
		
		if( array_key_exists($name, $hash) )
			return $hash[$name];
		else{
			return "d.$name";	
		}	
		
	}	
}