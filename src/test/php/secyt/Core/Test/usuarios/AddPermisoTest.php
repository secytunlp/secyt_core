<?php

namespace Secyt\Core\Test\usuarios;

use Cose\Security\model\Permission;

use Secyt\Core\service\ServiceFactory;

use Secyt\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

include_once dirname(__DIR__). '/conf/init.php';

class AddPermisoTest extends GenericTest{
	
	
	public function test(){

		//para cuando tengamos los permisos configurados.
		//$securityContext =  SecurityContext::getInstance();
		//$securityContext->login( "bernardo", "bernardo");
		
		
		$this->log("agregando Permiso");		
		
		$permiso = new Permission();
		$permiso->setName("Listar docentes");
		$permiso->setDescription("Muestra los docentes");
		
		$service = \Cose\Security\service\ServiceFactory::getPermissionService();
		
		$service->add( $permiso );
		
	}
}
?>