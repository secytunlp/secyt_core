<?php

namespace Secyt\Core\model;

/**
 * Tipobeca 
 *  
 * @author Marcos
 * @since 09-04-2020
 */

class Tipobeca {
    
 
	const AGENCIA1 = 'Beca incial';
	const AGENCIA2 = 'Beca superior';
	const CIC1 = 'Beca de entrenamiento';
	const CIC2 = 'Beca doctoral';
	const CIC3 = 'Beca posdoctoral';
	const CONICET1 = 'Beca doctoral';
	const CONICET2 = 'Beca finalizacion del doctorado';
	const CONICET3 = 'Beca posdoctoral';
	const UNLP1 = "TIPO A";
	const UNLP2 = 'TIPO B-MAESTRIA';
	const UNLP3 = 'TIPO B-DOCTORADO';
	const UNLP4 = 'RETENCION DE POSTGRADUADO';
	const UNLP5 = 'Beca Cofinanciada (UNLP-CIC)';
	const UNLP6 = "Beca doctoral";
	const UNLP7 = 'Beca maestria';
	const UNLP8 = 'Beca posdoctoral';
	const UNLP9 = 'Programa de retencion de Doctores';

    
   
										
    
    private static $itemsAgencia = array(  
    								   self::AGENCIA1=> "AGENCIA1.label",
    								   self::AGENCIA2=> "AGENCIA2.label",
    								  
    								   );
    								   
    private static $itemsCIC = array(  
    								   self::CIC1=> "CIC1.label",
    								   self::CIC2=> "CIC2.label",
    								   self::CIC3=> "CIC3.label",
    								  
    								   );
    private static $itemsCONICET = array(  
    								   self::CONICET1=> "CONICET1.label",
    								   self::CONICET2=> "CONICET2.label",
    								   self::CONICET3=> "CONICET3.label",
    								  
    								   );								   
    
    private static $itemsUNLP = array(  
    								   self::UNLP1=> "UNLP1.label",
    								   self::UNLP2=> "UNLP2.label",
    								   self::UNLP3=> "UNLP3.label",
    								   self::UNLP4=> "UNLP4.label",
    								   self::UNLP5=> "UNLP5.label",	
    								   self::UNLP6=> "UNLP6.label",	
    								   self::UNLP7=> "UNLP7.label",
    								   self::UNLP8=> "UNLP8.label",	
    								   self::UNLP9=> "UNLP9.label",
    								   );	
   	private static $items = array(  
    								   
    								'0'=> "criteria.sin_especificar",
   									self::AGENCIA1=> "AGENCIA1.label",
    								   self::AGENCIA2=> "AGENCIA2.label",
    								  
    								  
    								  self::CIC1=> "CIC1.label",
    								   self::CIC2=> "CIC2.label",
    								   self::CIC3=> "CIC3.label",
    								  
    								  self::CONICET1=> "CONICET1.label",
    								   self::CONICET2=> "CONICET2.label",
    								   self::CONICET3=> "CONICET3.label",
    								
    								   self::UNLP1=> "UNLP1.label",
    								   self::UNLP2=> "UNLP2.label",
    								   self::UNLP3=> "UNLP3.label",
    								   self::UNLP4=> "UNLP4.label",
    								   self::UNLP5=> "UNLP5.label",	
    								   self::UNLP6=> "UNLP6.label",	
    								   self::UNLP7=> "UNLP7.label",
    								   self::UNLP8=> "UNLP8.label",	
    								   self::UNLP9=> "UNLP9.label",
    								   );									   
	public static function getItems($institucion=''){
		switch ($institucion) {
			case 'ANPCyT':
				return self::$itemsAgencia;
			break;
			case 'CIC':
				return self::$itemsCIC;
			break;
			case 'CONICET':
				return self::$itemsCONICET;
			break;
			case 'UNLP':
				return self::$itemsUNLP;
			break;
			default:
				return self::$items;
			break;
		}
		
	}
	
	public static function getLabel($value){
		return self::$items[$value];
	}
					   
}
?>
