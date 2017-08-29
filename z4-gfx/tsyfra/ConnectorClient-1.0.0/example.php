<?php

include_once './CyfraService.php';

ini_set('default_charset', Config::SYSTEM_ENCODING);
iconv_set_encoding("input_encoding", Config::SYSTEM_ENCODING);
iconv_set_encoding("internal_encoding", Config::SYSTEM_ENCODING);
iconv_set_encoding("output_encoding", Config::SYSTEM_ENCODING);
mb_internal_encoding(Config::SYSTEM_ENCODING);

$service = new CyfraService();

if (TRUE) {
	// Тестирование запроса по получению списка доступных адресов

	$port = $service->getLocationPort();
	
	$fragment = 'кур'; // Минимальная длинна 3 символа

	/* @var $addresses Address Масив адресов. Максимальный размер масива 7 */
	$addresses = $port->getAddress($fragment);

	print_r($addresses);
}

if (FALSE) {
	// Тестирование запроса по получению lookup

	$port = $service->getToolPort();

	$hostname = 'cyfra.ua';

	/* @var $lookup String Текстовый ответ */
	$lookup = $port->lookingGlass($hostname, LookingGlassType::PING);

	print_r($lookup);
}
