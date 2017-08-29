<?php

/**
 * Description of Address
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class Address {

	/**
	 *
	 * @var String $city
	 * @access public
	 */
	public $city;

	/**
	 *
	 * @var String $street
	 * @access public
	 */
	public $street;

	/**
	 *
	 * @var String $building
	 * @access public
	 */
	public $building;

	/**
	 *
	 * @param String $city
	 * @param String $street
	 * @param String $building
	 * @access public
	 */
	public function __construct($city, $street, $building) {
		$this->city	 = $city;
		$this->street	 = $street;
		$this->building	 = $building;
	}
}
