<?php

namespace CoseEjemplo\Core\Test\sucursales;


use CoseEjemplo\Core\criteria\TareaCriteria;

use CoseEjemplo\Core\service\ServiceFactory;

include_once dirname(__DIR__). '/conf/init.php';

use CoseEjemplo\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

class ListTareasTest extends GenericTest{
	
	public function test(){

		//para cuando incorporamos los permisos:
		//$securityContext =  SecurityContext::getInstance();
		//$securityContext->login( "bernardo", "bernardo");
		
		$service = ServiceFactory::getTareaService();
		
		$this->log("listando tareas", __CLASS__);
		
		$criteria = new TareaCriteria();
		
		$entities = $service->getList( $criteria );
		
		foreach ($entities as $entity) {
			
			$this->log("Tarea: " . $entity, __CLASS__);
			
		}
		
	}
}
?>