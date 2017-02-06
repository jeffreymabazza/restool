<?php 

namespace Restool\Core\Exceptions\Input;

/**
 * String input checker
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Exceptions\RestoolException;

class ValidateIfStringInputException extends RestoolException 
{
	public function __construct($message = 'The input value is not a String type!', $status == 500) 
	{
		parent::__contruct($message, $status);
	}
}