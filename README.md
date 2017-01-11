
  RESTool (PHP Library)
=========================================

[![Latest Version](https://img.shields.io/packagist/v/lorddashme/restool.svg?colorB=e50000)](https://packagist.org/packages/lorddashme/restool) [![Packagist Downloads](https://img.shields.io/packagist/dt/lorddashme/restool.svg?colorB=00e500)](https://packagist.org/packages/lorddashme/restool/stats)

# About

Library for making API (RESTful) easy. With the latest Industry Standard Functions and Security.

* version: 1.0.0

# PHP Supported Version

```
PHP >= 5.5.12
```

# Sample of Usage

```
<?php

	error_reporting(E_ALL);

	use REST\RESTStatus;
	use REST\RESTConstant;
	use REST\RESTValidator;
	use REST\RESTUtilities;

	RESTUtilities::setHeader();
	RESTUtilities::setMethod('GET');

	RESTUtilities::setResponse(
		RESTConstant::HTTP_OK, 
		RESTStatus::SUCCESS, 
		'Hello World !'
	);

	error_reporting(0);

?>
```

# To Install

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
