<?php
namespace Secyt\Core\conf;

use Cose\conf\CoseConfig;
use Cose\utils\Logger;
use Cose\persistence\PersistenceConfig;

/**
 * configuración del proyecto
 *  
 * @author Marcos
 *
 */
class SecytConfig {

	/**
	 * singleton instance
	 * @var SecytConfig
	 */
	private static $instance;
	
	private $dbHost = '163.10.35.34';
	private $dbName = "viajes";
	private $dbUser = 'root';
	private $dbPassword = 'secyt';
		
	private $connectionDriver = "pdo_mysql";
	private $defaultPersistenUnit = "default";

	const PROXIES_NAMESPACE="Secyt\\Core\\Proxies";
	const PROXIES_PATH=  "/Proxies";

	const TEST_MODE = true;
	const MAIL_FROM_NAME = "Administrador SeCyT";
	const MAIL_FROM = "marcosp@presi.unlp.edu.ar";
	const TEST_MAIL_TO = "marcosp@presi.unlp.edu.ar";
	
	const POP_MAIL_HOST ='smtp.presi.unlp.edu.ar';
	const POP_MAIL_PORT ='465';
	const POP_MAIL_SMTP_SECURE ='ssl';
	const POP_MAIL_USERNAME ='marcosp';
	const POP_MAIL_PASSWORD ='elMaster1';
	const MAIL_ENVIO_POP =true;
	
	private $doctrineHome;
	
	private function __construct(){

	}
	
	public static function getInstance(){
		if (  !self::$instance instanceof self ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	/**
	 * inicializamos turnos core.
	 */
	public function initialize(  ){
		
		//$this->setDoctrineHome($doctrineHome);
		
		//inicializamos el fmk Cose
		$coseConfig = CoseConfig::getInstance();
		$coseConfig->initialize();
		$this->setLibsPath("D:/Documents/Mis Webs/secyt_core/libs");
		
		setlocale(LC_ALL, "es_AR.UTF-8");
		
		
		//inicializamos la persistencia.
		$this->initPersistence();
		

	}

	/**
	 * inicializamos la configuraciÃ³n de la persistencia.
	 */
	public function initPersistence(){
	
		$connectionOptions = array(
						    'driver'   => $this->getConnectionDriver(),
						    'host'     =>  $this->getDbHost(),
						    'dbname'   => $this->getDbName(),
						    'user'     => $this->getDbUser(),
						    'password' => $this->getDbPassword(),
							'charset' => 'utf8',
		                	'driverOptions' => array(
		                    	    1002=>'SET NAMES utf8'
		                	)
						);
						
		$pathEntities = dirname(__DIR__) ;
		
		$proxiesPath = dirname(__DIR__) . self::PROXIES_PATH;
		
		PersistenceConfig::configure( $this->getDefaultPersistenUnit(), self::PROXIES_NAMESPACE, $proxiesPath, $pathEntities, $connectionOptions);
		
		PersistenceConfig::setDefaultUnit($this->getDefaultPersistenUnit());
	}
	
	/**
	 * se inicializa el logger
	 * @param string $xml path al archivo de configuraciÃ³n xml
	 */
	public function initLogger($xml){
	
		Logger::configure( $xml );
		
		
	}
	
	public static function setInstance($instance)
	{
	    self::$instance = $instance;
	}



	public function getDoctrineHome()
	{
	    return $this->doctrineHome;
	}

	public function setDoctrineHome($doctrineHome)
	{
	    $this->doctrineHome = $doctrineHome;
	}

	

	public function getDbHost()
	{
	    return $this->dbHost;
	}

	public function setDbHost($dbHost)
	{
	    $this->dbHost = $dbHost;
	}

	public function getDbName()
	{
	    return $this->dbName;
	}

	public function setDbName($dbName)
	{
	    $this->dbName = $dbName;
	}

	public function getDbUser()
	{
	    return $this->dbUser;
	}

	public function setDbUser($dbUser)
	{
	    $this->dbUser = $dbUser;
	}

	public function getDbPassword()
	{
	    return $this->dbPassword;
	}

	public function setDbPassword($dbPassword)
	{
	    $this->dbPassword = $dbPassword;
	}

	public function getConnectionDriver()
	{
	    return $this->connectionDriver;
	}

	public function setConnectionDriver($connectionDriver)
	{
	    $this->connectionDriver = $connectionDriver;
	}

	public function getDefaultPersistenUnit()
	{
	    return $this->defaultPersistenUnit;
	}

	public function setDefaultPersistenUnit($defaultPersistenUnit)
	{
	    $this->defaultPersistenUnit = $defaultPersistenUnit;
	}
	
	public function getLibsPath()
	{
	    return $this->libsPath;
	}

	public function setLibsPath($libsPath)
	{
	    $this->libsPath = $libsPath;
	}
}