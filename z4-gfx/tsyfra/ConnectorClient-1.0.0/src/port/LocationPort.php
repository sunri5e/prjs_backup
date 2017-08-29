<?php

if (!defined('CYFRA_API_DIR')) {
    define('CYFRA_API_DIR', realpath(dirname(__FILE__)) . '/../../');
}

include_once(CYFRA_API_DIR . '/conf/Config.php');
include_once(CYFRA_API_DIR . '/src/service/location/CyfraLocationService.php');

/**
 * Description of LocationPort
 *
 * @author Mykola Vasylenko <kolya@cyfra.ua>
 */
class LocationPort extends CyfraLocationService {

	public function __construct() {
		$options = array(
			'login'		 => Config::USERNAME,
			'password'	 => Config::PASSWORD,
			'authentication' => SOAP_AUTHENTICATION_BASIC, /* ! < Алгоритм аутентификации с вервером */
			'ssl_method'	 => SOAP_SSL_METHOD_TLS,
			'compression'	 => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | Config::GZIP_LEVEL,
			'stream_context' => stream_context_create(
				array(
					'ssl' => array(
						'verify_peer'		 => true,
						'allow_self_signed'	 => false,
						'cafile'		 => CYFRA_API_DIR . '/ssl/ca.crt',
						'verify_depth'		 => 1,
						'CN_match'		 => "snag.cyfra.ua"
					)
				)
			)
		);

		parent::__construct($options, Config::WSDL_LOCATION_PATH);
	}

	/**
	 *
	 * @param String $fragment
	 */
	public function getAddress($fragment) {
		return parent::__getAddress(new GetAddress($fragment))->list;
	}
}
