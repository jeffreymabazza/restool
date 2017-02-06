<?php

namespace Restool\Core\Request;

/**
 * Restool Primary Class Request
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

class Request 
{
	/**
     * Allowed request method
     *
     * @param  string  $method
     * @return void
     */
	public static function method($method) 
	{
		if ($_SERVER['REQUEST_METHOD'] != $method) {
            exit('Method used is not allowed, use '. htmlentities($method) .' instead.');
		}
	}

	/**
     * Get all request headers.
     *
     * @return string
     */
	public static function getToken() 
	{
		$token = '';
		foreach (getallheaders() as $key => $value) {
		    if ($key == '_restool_token') {
		    	$token = $value;
		    	break;
		    }
		}

		return $token;
	}

	/**
     * Check the token if valid for the request.
     *
     * @param  string  $token
     * @return mixed
     */
	public static function evaluateToken($token) 
	{
		// TO DO:
	}
}