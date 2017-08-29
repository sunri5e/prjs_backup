<?php

/**
 * Description of GetLookingGlass
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class GetLookingGlass {

	/**
	 *
	 * @var String $address
	 */
	public $address;

	/**
	 *
	 * @var LookingGlassType 
	 */
	public $type;
	
	/**
	 *
	 * @param String $address
	 * @param LookingGlassType $type
	 */
	public function __construct($address, $type) {
		$this->address = $address;
		$this->type = $type;
	}
}
