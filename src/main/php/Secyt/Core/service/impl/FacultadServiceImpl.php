<?php
namespace Secyt\Core\service\impl;


use Secyt\Core\dao\DAOFactory;

use Secyt\Core\service\IFacultadService;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

use Secyt\Core\model\Genre;

/**
 * servicio para Facultad
 *  
 * @author Marcos
 * @since 13-06-2015
 *
 */
class FacultadServiceImpl extends CrudService implements IFacultadService {

	
	protected function getDAO(){
		return DAOFactory::getFacultadDAO();
	}
	
	
	/**
	 * redefino el add para agregar funcionalidad
	 * @param $entity
	 * @throws ServiceException
	 */
	public function add($entity){

		/*
		 * Hacemos lo que queremos con la tarea. 
		 * Por ejemplo, enviar un email al usuario.
		 */
		
		//agregamos la tarea.
		parent::add($entity);
		
	}	
	
	function validateOnAdd( $entity ){
	
		/*
		 * Realizamos validaciones sobre la tarea. 
		 * Por ejemplo, campos obligatorios.
		 */		
	}
		
	
	function validateOnUpdate( $entity ){
	
		/*
		 * Validaciones como en el add pero 
		 * las necesarias para modificar.
		 */
		
		$this->validateOnAdd($entity);
	}
	
	function validateOnDelete( $oid ){
	
		/*
		 * validaciones al borrar una tarea.
		 */
	}

	
	
	
}	