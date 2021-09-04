<?php

namespace Secyt\Core\model;

/**
 * Institucion 
 *  
 * @author Marcos
 * @since 09-04-2020
 */


class Institucion {
    
    const ANPCyT = 'ANPCyT';
    const CIC = 'CIC';
	const CONICET = 'CONICET';
	const UNLP = 'UNLP';
    
   

	
										
    
    private static $items = array(  
    								   
    								
    									self::ANPCyT=> "ANPCyT.label",
    								   self::CIC=> "CIC.label",
    								   self::CONICET=> "CONICET.label",
    								   self::UNLP=> "UNLP.label",
    								   );
    
	public static function getItems(){
		return self::$items;
	}
	
	public static function getLabel($value){
		return self::$items[$value];
	}
	
	
	
    
    
    

	
					   
}
?>
