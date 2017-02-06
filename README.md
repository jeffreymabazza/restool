
<p align="center">
	<a>
		<font size="10"><b>RESTool</b></font>
	</a>
</p>

[![Release](https://img.shields.io/github/release/lorddashme/restool.svg?colorB=e50000)](https://github.com/LordDashMe/restool/releases) [![Latest Version](https://img.shields.io/packagist/v/lorddashme/restool.svg?colorB=00e500)](https://packagist.org/packages/lorddashme/restool) [![Packagist Downloads](https://img.shields.io/packagist/dt/lorddashme/restool.svg?colorB=00e500)](https://packagist.org/packages/lorddashme/restool/stats) [![Contributors](https://img.shields.io/github/contributors/lorddashme/restool.svg?colorB=00e500)](https://github/contributors/lorddashme/restool) [![License](https://img.shields.io/packagist/l/lorddashme/restool.svg)](https://packagist.org/l/lorddashme/restool) 

# About
A PHP Library for making API (RESTful) easy. With the latest Industry Standard Functions and Security.
* v2.0.0

# Requirements
```
PHP >= 5.5.12
```

# Example
```
<?php

	require __DIR__ . '/vendor/autoload.php';

	use Restool\Core\Request\Request as RestoolRequest;
	use Restool\Core\Response\Response as RestoolResponse;
	use Restool\Plugins\Hashing\DefaultHasher as RestoolDefaultHasher;

	// Set the header and method used by the API script.
	RestoolRequest::header();
	RestoolRequest::method('GET');

	// content|logic body here...

	// Response of the API.
	RestoolResponse::encode(200, (new RestoolDefaultHasher)->make('Hello World!', 8));
?>
```

# How To Install
* In your composer.json file add this require key:

```
	"require": {
        "lorddashme/restool": "v2.0.0"
	}
```

* Using CLI command, copy and execute this command in the target project or specified folder:
```
	composer require lorddashme/restool
```

# Author
```
	Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
```
