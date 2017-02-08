<?php

namespace Restool\Core\Foundation\Request\Traits;

/**
 * Request Trait
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Foundation\Request\Bridges\RequestInterface;
use Restool\Core\Foundation\Request\Services\RequestService;

trait RequestTrait
{
	/**
     * Allowed request method
     *
     * @param  string  $method
     * @return void
     */
	public static function method($method) 
	{
		
	}

	/**
     * Verify if the request is valid.
     *
     * @param  string  $headerKey
     * @return void
     */
	public static function verifyAccess($headerKey) 
	{

	}
}