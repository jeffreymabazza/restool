<?php

namespace Restool\Core\Foundation\Request\Services;

/**
 * Request Service
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Foundation\Request\Bridges\RequestInterface;

class RequestService implements RequestInterface
{
	/**
     * Allowed request method
     *
     * @param  string  $method
     * @return void
     */
	public function method($method) 
	{
		if ($_SERVER['REQUEST_METHOD'] != $method) {
            exit('Method used is not allowed, use '. htmlentities($method) .' instead.');
		}
	}

	/**
     * Verify if the request is valid.
     *
     * @param  string  $headerKey
     * @return void
     */
	public function verifyAccess($headerKey) 
	{
		$this->evaluateToken(
			$this->getToken($headerKey)
		);
	}

	/**
     * Get the header token value.
     *
     * @param  string  $headerKey
     * @return string
     */
	private function getToken($headerKey) 
	{
		$token = '';
		foreach (getallheaders() as $key => $value) {
		    if ($key == $headerKey) {
		    	$token = $value;
		    	break;
		    }
		}

		return $token;
	}

	/**
     * Evaluate the given token.
     *
     * @param  string  $token
     * @return mixed
     */
	private function evaluateToken($token) 
	{
		// TO DO:
	}
}