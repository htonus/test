<?php

	define('MODE', 'admin');

	$appPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

	require_once $appPath.'config.inc.php' || require_once $appPath.'config.inc.php.tpl';

	try {
		Application::run();
	} catch (Exception $e) {
		echo implode('<br />', $e->getTrace());
		header('Location: /');
	}
