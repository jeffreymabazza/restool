<?php

error_reporting(E_ALL);

$libraryPath = realpath(dirname(__FILE__)).'/www/';

require_once $libraryPath.'RESTAutoLoader.php';
require_once $libraryPath.'RESTConstant.php';
require_once $libraryPath.'RESTException.php';
require_once $libraryPath.'RESTStatus.php';
require_once $libraryPath.'RESTUtilities.php';
require_once $libraryPath.'RESTValidator.php';

use REST\RESTAutoLoader;

# Plugins <- routing/path
(new RESTAutoLoader())->routes($libraryPath.'plugins', 
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