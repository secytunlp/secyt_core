<?php
namespace Secyt\Core\service\impl;


use Secyt\Core\dao\DAOFactory;

use Secyt\Core\service\IIntegranteEstadoService;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

use Cose\Security\model\User;

use Secyt\Core\criteria\IntegranteEstadoCriteria;

use Rasty\security\RastySecurityContext;

use Secyt\Core\service\ServiceFactory;

use Secyt\Core\utils\SecytUtils;

use Rasty\utils\Logger;



/**
 * servicio para IntegranteEstado
 *  
 * @author Marcos
 * @since 13-04-2020
 *
 */
class IntegranteEstadoServiceImpl extends CrudService implements IIntegranteEstadoService {

	
	protected function getDAO(){
		return DAOFactory::getIntegranteEstadoDAO();
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

		
		try{
			
			$criteria = new IntegranteEstadoCriteria();
			$criteria->setIntegrante($entity->getIntegrante());
			$criteria->setHastaNull(1);
			
			//Logger::logObject($entity->getIntegrante());
			
			$integranteEstadoAnterior = ServiceFactory::getIntegranteEstadoService()->getSingleResult( $criteria );
			
		} catch (\Exception $e) {
			
			//throw new RastyException($e->getMessage());
			
		}
		
		
		
		
		
		if ($integranteEstadoAnterior) {
			
			$integranteEstadoAnterior->setHasta(new \Datetime());
			
			$this->update( $integranteEstadoAnterior );
		}
		
		
		
		$user = RastySecurityContext::getUser();
		$user = SecytUtils::getUserByUsername($user->getUsername());
		$entity->setUser($user);
		$entity->setDesde( new \Datetime() );
		
		
		
		
		//agregamos la tarea.
		parent::add($entity);
		
		
		$integrante = ServiceFactory::getIntegranteService()->get($entity->getIntegrante()->getOid());
		$integrante->setAlta($entity->getAlta());
		$integrante->setBaja($entity->getBaja());
		$integrante->setHorasinv($entity->getHorasinv());
		$integrante->setCambio($entity->getCambio());
    	
		if ($entity->getOrgbeca()) {
			$integrante->setBecario(1);
		}
    	$integrante->setTipobeca($entity->getTipobeca());
    	$integrante->setOrgbeca($entity->getOrgbeca());
    	$integrante->setDtBeca($entity->getDtBeca());
    	$integrante->setDtBecahasta($entity->getDtBecahasta());
   		$integrante->setDtBecaestimulo($entity->getDtBecaestimulo());
   		$integrante->setBlBecaestimulo($entity->getBlBecaestimulo());
    	$integrante->setDtBecaestimulohasta($entity->getDtBecaestimulohasta());
  		$integrante->setCargo($entity->getCargo());
  		$integrante->setCarrerainv($entity->getCarrerainv());
		$integrante->setCategoria($entity->getCategoria());
		$integrante->setDeddoc($entity->getDeddoc());
  		$integrante->setFacultad($entity->getFacultad());
		$integrante->setOrganismo($entity->getOrganismo());
		$integrante->setTipo($entity->getTipo());
		$integrante->setEstado($entity->getEstado());
    		
		ServiceFactory::getIntegranteService()->update( $integrante );
		
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