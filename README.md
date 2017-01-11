
# RESTool [![Release](https://img.shields.io/github/release/lorddashme/restool.svg?colorB=e50000)](https://github.com/LordDashMe/restool/releases) 

[![Latest Version](https://img.shields.io/packagist/v/lorddashme/restool.svg?colorB=00e500)](https://packagist.org/packages/lorddashme/restool) [![Packagist Downloads](https://img.shields.io/packagist/dt/lorddashme/restool.svg?colorB=00e500)](https://packagist.org/packages/lorddashme/restool/stats) [![Contributors](https://img.shields.io/github/contributors/lorddashme/restool.svg?colorB=00e500)](https://github/contributors/lorddashme/restool) [![License](https://img.shields.io/packagist/l/lorddashme/restool.svg)](https://packagist.org/l/lorddashme/restool) 

# About
A PHP Library for making API (RESTful) easy. With the latest Industry Standard Functions and Security.
* version: 1.0.0

# Requirements
```
PHP >= 5.5.12
```

# Sample of Usage
```
<?php
	error_reporting(E_ALL);

	require __DIR__ . '/vendor/autoload.php';

	use Restool\Core\Request\Request;
	use Restool\Core\Response\Response;
	use Restool\Plugins\Hashing\DefaultHasher;

	Request::method('GET');
	Response::encode(200, DefaultHasher::make('Hello World!', 8), false);
?>
```

# How To Install
* In your composer.json file add this require:

```
	"require": {
        "lorddashme/restool": "v1.0.0"
	}
```

* Using CLI command, copy and execute this command in the target project:
```
	composer require lorddashme/restool
```

# Author
```
	Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
```
