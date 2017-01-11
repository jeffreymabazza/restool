<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sample
 *
 * @author Joshua Clifford Reyes
 */

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
	'Default Implementation Example of API RESTful'
);

error_reporting(0);