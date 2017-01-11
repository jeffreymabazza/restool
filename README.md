
  restling (PHP Library)
=========================================

[![Latest Version](https://img.shields.io/packagist/v/lorddashme/webservice-v1.svg)](https://packagist.org/packages/lorddashme/restling)[![Packagist Downloads](https://img.shields.io/packagist/dt/lorddashme/webservice-v1.svg)](https://packagist.org/packages/lorddashme/restling/stats)

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
        "lorddashme/restling": "v1.0.0"
	}
```

* Using CLI command, copy and execute this command in the target project:
```
	composer require lorddashme/restling
```
