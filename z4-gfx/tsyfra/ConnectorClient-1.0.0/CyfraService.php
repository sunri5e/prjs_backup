<?php

if (!defined('CYFRA_API_DIR')) {
    define('CYFRA_API_DIR', realpath(dirname(__FILE__)));
}

include_once(CYFRA_API_DIR . '/src/port/LocationPort.php');
include_once(CYFRA_API_DIR . '/src/port/ToolPort.php');

/**
 * Description of CyfraService
 *
 * @author Mykola Vasylenko <nvasylenko@atbos.com>
 */
class CyfraService {

	/**
	 *
	 * @return LocationPort
	 */
	public function getLocationPort() {
		return new LocationPort();
	}

	/**
	 *
	 * @return ToolPort
	 */
	public function getToolPort() {
		return new ToolPort();
	}
}
