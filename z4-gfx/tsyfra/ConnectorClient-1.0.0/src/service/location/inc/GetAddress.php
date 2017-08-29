<?php

/**
 * Description of GetAddress
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class GetAddress {

	/**
	 *
	 * @var String $fragment
	 * @access public
	 */
	public $fragment;

	/**
	 *
	 * @param String $fragment
	 * @access public
	 */
	public function __construct($fragment) {
		$this->fragment = $fragment;
	}
}
