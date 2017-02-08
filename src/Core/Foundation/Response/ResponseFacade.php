<?php

namespace Restool\Core\Foundation\Response;

/**
 * Response Facade
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Foundation\Response\Adapters\ResponseAdapter;
use Restool\Core\Foundation\Response\Services\ResponseService;

class ResponseFacade
{
	/**
	 * Facade method.
     * Set the response header.
     *
     * @param  int  $code - HTTP Code
     * @return void
     */
	public static function header()
	{
		$responseService = new ResponseService();
		(new ResponseAdapter($responseService))->adapt->header();
	}

	/**
	 * Facade method.
     * Set the default resources JSON (RESTful) response.
     *
     * @param  int  $code - HTTP Code
     * @param  string  $message - Rsult Data of Request
     * @param  boolean  $error - Error Flag
     * @return json
     */
	public static function content($code, $message, $error) 
	{
		$responseService = new ResponseService();
		(new ResponseAdapter($responseService))->adapt->content($code, $message, $error);
	}

	/**
	 * Facade method.
     * List of HTTP code.
     *
     * @param  int  $code - HTTP Code
     * @return string
     */
	public static function httpCode($code)
	{
		$responseService = new ResponseService();
		(new ResponseAdapter($responseService))->adapt->httpCode($code);
	}
}