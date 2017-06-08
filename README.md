
<h1 align="center">
	RESTool
	<br>
	<a href="https://github.com/LordDashMe/restool/releases"><img src="https://img.shields.io/github/release/LordDashMe/restool.svg?maxAge=2592000&colorB=de0404" alt="Release"></a>
	<a href="https://packagist.org/packages/lorddashme/restool"><img src="https://img.shields.io/packagist/v/lorddashme/restool.svg?colorB=00e500" alt="Packgist Latest Version"></a>
	<a href="https://packagist.org/packages/lorddashme/restool/stats"><img src="https://img.shields.io/packagist/dt/lorddashme/restool.svg?colorB=00e500" alt="Packgist Downloads"></a>
	<a href="https://github/contributors/lorddashme/restool"><img src="https://img.shields.io/github/contributors/LordDashMe/restool.svg?maxAge=2592000" alt="Contributors"></a>
	<a href="https://packagist.org/l/LordDashMe/restool"><img src="https://img.shields.io/packagist/l/lorddashme/restool.svg" alt="License"></a>
	<br>
	<a href="https://github.com/LordDashMe/restool/watchers"><img src="https://img.shields.io/github/watchers/LordDashMe/restool.svg?style=social&label=Watch&maxAge=2592000" alt="Watcher"></a>
	<a href="https://github.com/LordDashMe/restool/stargazers"><img src="https://img.shields.io/github/stars/LordDashMe/restool.svg?style=social&label=Star&maxAge=2592000" alt="Star"></a>
	<a href="https://github.com/LordDashMe/restool/network"><img src="https://img.shields.io/github/forks/LordDashMe/restool.svg?style=social&label=Fork" alt="Fork"></a>
</h1>

# About
A PHP Library for making API (RESTful) response easy. With the latest Industry Standard Functions and Security.
* v2.1.1

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
	RestoolRequest::evaluateToken(RestoolRequest::getToken());
	RestoolRequest::method('GET');

	// content|logic body here...

	// Response of the API.
	RestoolResponse::content(200, (new RestoolDefaultHasher)->make('Hello World!', 8));
?>
```

# How To Install
* In your composer.json file add this require key:

```
	"require": {
        	"lorddashme/restool": "v2.1.1"
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
