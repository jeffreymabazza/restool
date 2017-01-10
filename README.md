# WebService

Library for making API (RESTful) easy.
With the latest Industry Standard Functions and Security.

* version: 1.0.0

# PHP Supported Version

```
PHP >= 5.5.12
```

# Sample of Usage

```
<?php

	error_reporting(E_ERROR);

	require_once realpath(dirname(__FILE__) .'/..') .'/libraries/API.php';

	use Libraries\APIStatus;
	use Libraries\APIConstant;
	use Libraries\APIValidator;
	use Libraries\APIUtilities;

	APIUtilities::setHeader();
	APIUtilities::setMethod('GET');

	APIUtilities::setResponse(
		APIConstant::HTTP_OK, 
		APIStatus::SUCCESS, 
		'Default Implementation Example of API RESTful'
	);

	error_reporting(0);

?>
```

# To Install

* In your composer.json file add this requirements inorder to install the package.

```
	"require": {
	        "php": ">=5.5.12",
	        "lorddashme/webservice-v1": "v1.0.0"
	}
```