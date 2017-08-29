<?php

/**
 * Description of GetAddressResponse
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class GetAddressResponse {

	/**
	 *
	 * @var Address $list
	 * @access public
	 */
	public $list;

	/**
	 *
	 * @param Address $list
	 * @access public
	 */
	public function __construct($list) {
		$this->list = $list;
	}
}
