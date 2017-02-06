<?php 

namespace Restool\Core\Exceptions\Input;

/**
 * Array input checker
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Exceptions\RestoolException;

class ValidateIfArrayInputException extends RestoolException 
{
	public function __construct($message = 'The input value is not a Array type!', $status == 500) 
	{
		parent::__contruct($message, $status);
	}
}