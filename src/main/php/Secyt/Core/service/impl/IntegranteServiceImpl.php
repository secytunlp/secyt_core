<?php
namespace Secyt\Core\service\impl;


use Secyt\Core\dao\DAOFactory;

use Secyt\Core\service\IIntegranteService;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

use Cose\Security\model\User;

use Secyt\Core\model\IntegranteEstado;


use Secyt\Core\service\ServiceFactory;

use Secyt\Core\utils\SecytUtils;

/**
 * servicio para Integrante
 *  
 * @author Marcos
 * @since 13-04-2020
 *
 */
class IntegranteServiceImpl extends CrudService implements IIntegranteService {

	
	protected function getDAO(){
		return DAOFactory::getIntegranteDAO();
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
		
		//creo un estado 
		$estado = new IntegranteEstado();
		$estado->setAlta($entity->getAlta());
		$estado->setBaja($entity->getBaja());
		$estado->setHorasinv($entity->getHorasinv());
		$estado->setCambio($entity->getCambio());
		
    	$estado->setMotivo('Nuevo integrante');
    	
    	$estado->setTipobeca($entity->getTipobeca());
    	$estado->setOrgbeca($entity->getOrgbeca());
    	$estado->setDtBeca($entity->getDtBeca());
    	$estado->setDtBecahasta($entity->getDtBecahasta());
   		$estado->setDtBecaestimulo($entity->getDtBecaestimulo());
   		$estado->setBlBecaestimulo($entity->getBlBecaestimulo());
    	$estado->setDtBecaestimulohasta($entity->getDtBecaestimulohasta());
  		$estado->setCargo($entity->getCargo());
  		$estado->setCarrerainv($entity->getCarrerainv());
		$estado->setCategoria($entity->getCategoria());
		$estado->setDeddoc($entity->getDeddoc());
  		$estado->setFacultad($entity->getFacultad());
		$estado->setOrganismo($entity->getOrganismo());
    	$estado->setIntegrante($entity);
		$estado->setTipo($entity->getTipo());
		$estado->setEstado($entity->getEstado());
    		
    
    
    
		
		
		
		
		ServiceFactory::getIntegranteEstadoService()->add( $estado );
		
		
	}	
	
	function validateOnAdd( $entity ){
	
		/*
		 * Realizamos validaciones sobre la tarea. 
		 * Por ejemplo, campos obligatorios.
		 */		
	}
		
	
	public function update($entity){

		/*
		 * Hacemos lo que queremos con la tarea. 
		 * Por ejemplo, enviar un email al usuario.
		 */
		
		//agregamos la tarea.
		parent::update($entity);
		
		$docente = ServiceFactory::getDocenteService()->get($entity->getDocente()->getOid());
		   	
		if ($entity->getOrgbeca()) {
			$docente->setBecario(1);
		}
    	$docente->setTipobeca($entity->getTipobeca());
    	$docente->setOrgbeca($entity->getOrgbeca());
    	$docente->setDtBeca($entity->getDtBeca());
    	$docente->setDtBecahasta($entity->getDtBecahasta());
   		$docente->setDtBecaestimulo($entity->getDtBecaestimulo());
   		$docente->setBlBecaestimulo($entity->getBlBecaestimulo());
    	$docente->setDtBecaestimulohasta($entity->getDtBecaestimulohasta());
  		$docente->setCargo($entity->getCargo());
  		$docente->setCarrerainv($entity->getCarrerainv());
		$docente->setCategoria($entity->getCategoria());
		$docente->setDeddoc($entity->getDeddoc());
  		$docente->setFacultad($entity->getFacultad());
		$docente->setOrganismo($entity->getOrganismo());
		$docente->setMail($entity->getMail());
		$docente->setDtCarrerainv($entity->getDtCarrerainv());
		$docente->setDtCargo($entity->getDtCargo());
		$docente->setTitulo($entity->getTitulo());
		$docente->setTitulopost($entity->getTitulopost());
		$docente->setUnidad($entity->getUnidad());
		$docente->setUniversidad($entity->getUniversidad());
    		
		ServiceFactory::getDocenteService()->update( $docente );
		
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