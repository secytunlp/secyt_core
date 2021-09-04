<?php
namespace Secyt\Core\service\impl;


use Secyt\Core\dao\DAOFactory;

use Secyt\Core\service\IProvinciaService;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

use Cose\Security\model\User;

/**
 * servicio para Provincia
 *  
 * @author Marcos
 * @since 12-06-2015
 *
 */
class ProvinciaServiceImpl extends CrudService implements IProvinciaService {

	
	protected function getDAO(){
		return DAOFactory::getProvinciaDAO();
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