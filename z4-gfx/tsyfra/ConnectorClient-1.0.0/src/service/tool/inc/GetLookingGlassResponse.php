<?php

/**
 * Description of GetLookingGlassResponse
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class GetLookingGlassResponse {

	/**
	 *
	 * @var String $text
	 * @access public
	 */
	public $text;

	/**
	 *
	 * @param String $text
	 * @access public
	 */
	public function __construct($text) {
		$this->text = $text;
	}
}
