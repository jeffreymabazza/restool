<?php 

namespace Restool\Core\Exceptions\Input;

/**
 * Boolean input checker
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Exceptions\RestoolException;

class ValidateIfBooleanInputException extends RestoolException 
{
	public function __construct($message = 'The input value is not a Boolean type!', $status == 500) 
	{
		parent::__contruct($message, $status);
	}
}