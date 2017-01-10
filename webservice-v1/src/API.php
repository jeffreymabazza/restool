<?php

error_reporting(E_ALL);

$libraryPath = realpath(dirname(__FILE__)).'/library/';

require_once $libraryPath.'APIAutoLoader.php';
require_once $libraryPath.'APIConstant.php';
require_once $libraryPath.'APIException.php';
require_once $libraryPath.'APIStatus.php';
require_once $libraryPath.'APIUtilities.php';
require_once $libraryPath.'APIValidator.php';

use Libraries\APIAutoLoader;

# Plugins <- routing/path
(new APIAutoLoader())->routes($libraryPath.'plugins', 
	[
		'Database' => [],
		'Encryption' => [
			'OpenSSLEncrypter'
			],
		'Hashing' => [
			'BycryptHasher', 
			'DefaultHasher'
			]
	]
)->load();