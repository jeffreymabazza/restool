<?php 

namespace Restool\Core\Exceptions\Input;

/**
 * Numeric input checker
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Exceptions\RestoolException;

class ValidateIfNumericInputException extends RestoolException 
{
	public function __construct($message = 'The input value is not a Numeric type!', $status == 500) 
	{
		parent::__contruct($message, $status);
	}
}