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
     * Allowed Request Method
     *
     * @return void
     */
	public static function method($method) 
	{
		if ($_SERVER['REQUEST_METHOD'] != $method) {
            exit('Method used is not allowed, use '. htmlentities($method) .' instead.');
		}
	}
}