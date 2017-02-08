<?php

namespace Restool\Core\Foundation\Request;

/**
 * Request Facade
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Foundation\Request\Adapters\RequestAdapter;
use Restool\Core\Foundation\Request\Services\RequestService;

class RequestFacade
{
	/**
     * Facade method.
     * Allowed request method
     *
     * @param  string  $method
     * @return void
     */
	public static function method($method)
	{
		$requestService = new RequestService();
		(new RequestAdapter($requestService))->adapt->method($method);
	}

	/**
	 * Facade method.
     * Verify if the request is valid.
     *
     * @param  string  $headerKey
     * @return void
     */
	public static function verifyAccess($headerKey) 
	{
		$requestService = new RequestService();
		(new RequestAdapter($requestService))->adapt->verifyAccess($headerKey);
	}
}