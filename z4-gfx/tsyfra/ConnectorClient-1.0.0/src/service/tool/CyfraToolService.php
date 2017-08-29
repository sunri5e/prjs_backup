<?php

if (!defined('CYFRA_API_DIR')) {
    define('CYFRA_API_DIR', realpath(dirname(__FILE__)) . '/../../../');
}

include_once(CYFRA_API_DIR . '/src/service/tool/inc/LookingGlassType.php');
include_once(CYFRA_API_DIR . '/src/service/tool/inc/GetLookingGlass.php');
include_once(CYFRA_API_DIR . '/src/service/tool/inc/GetLookingGlassResponse.php');

/**
 * Description of CyfraToolService
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class CyfraToolService extends SoapClient {

	/**
	 *
	 * @var array $classmap The defined classes
	 * @access private
	 */
	private static $classmap = array(
		'LookingGlassType'               => 'LookingGlassType',
		'getLookingGlass'		 => 'GetLookingGlass',
		'getLookingGlassResponse'	 => 'GetLookingGlassResponse');

	/**
	 *
	 * @param Array $options A array of config values
	 * @param String $wsdl The wsdl file to use
	 * @access public
	 */
	public function __construct(array $options = array(), $wsdl = '') {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}

		if (isset($options['features']) == false) {
			$options['features'] = SOAP_SINGLE_ELEMENT_ARRAYS | SOAP_USE_XSI_ARRAY_TYPE | SOAP_WAIT_ONE_WAY_CALLS;
		}

		if (isset($options['wsdl_cache']) == false) {
			$options['wsdl_cache'] = WSDL_CACHE_MEMORY;
		}

		if (isset($options['compression']) == false) {
			$options['compression'] = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;
		}

		parent::__construct($wsdl, $options);
	}

	/**
	 *
	 * @param GetLookingGlass $parameters
	 * @access public
	 */
	public function __lookingGlass($parameters) {
		return $this->__soapCall('lookingGlass', array($parameters));
	}
}
