<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Joshua Clifford Reyes
 */

error_reporting(E_ERROR);

use REST\RESTStatus;
use REST\RESTConstant;
use REST\RESTDatabase;
use REST\RESTValidator;
use REST\RESTUtilities;

use REST\Plugin\Hashing\BycryptHasher;
use REST\Plugin\Encryption\OpenSSLEncrypter;

RESTUtilities::setHeader();
RESTUtilities::setMethod('GET');

RESTUtilities::setResponse(
	RESTConstant::HTTP_OK, 
	RESTStatus::SUCCESS, 
	BycryptHasher::make('AKO', 8)
);

$secretKey = 'YourSecretKey';
$plainText = 'The plain-text to be ecrypt';

$opensslecrypter = new OpenSSLEncrypter($secretKey, 'AES-256-CTR');
$encrypted = $opensslecrypter->encrypt($plainText);
echo $encrypted;

$openssldec = new OpenSSLEncrypter($secretKey, 'AES-256-CTR');
echo $openssldec->decrypt($encrypted);

error_reporting(0);