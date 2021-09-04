<?php

namespace CoseEjemplo\Core\Test\tareas;

use CoseEjemplo\Core\model\Tarea;

use CoseEjemplo\Core\service\ServiceFactory;

use CoseEjemplo\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

include_once dirname(__DIR__). '/conf/init.php';

class AddTareaTest extends GenericTest{
	
	
	public function test(){

		//para cuando tengamos los permisos configurados.
		//$securityContext =  SecurityContext::getInstance();
		//$securityContext->login( "bernardo", "bernardo");
		
		$service = ServiceFactory::getTareaService();
		
		$this->log("agregando Tarea");		
		
		$tarea = new Tarea();
		$tarea->setTitulo("Rejas Javier");
		$tarea->setObservaciones("Llevar las rejas a Javier para armar las de las ventanas");
		$tarea->setFechaHora( new \DateTime() );
		$service->add( $tarea );
		
		
	}
}
?>