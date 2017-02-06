<?php 

namespace Restool\Core\Exceptions;

/**
 * Primary file exception
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Exception;

class RestoolException 
{
	/**
	 * Exception message. 
	 *
	 * @var string
	 */
	protected $message;

	/**
	 * Exception status. 
	 *
	 * @var string
	 */
	protected $status;

	public function __construct($message = 'Throws an Exception', $status = 500) 
	{	
		$this->message = $message;
		$this->status = $status;
	}
}