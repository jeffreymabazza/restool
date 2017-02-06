<?php 

namespace Restool\Core\Exceptions\Input;

/**
 * Empty input checker
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Exceptions\RestoolException;

class ValidateIfEmptyInputException extends RestoolException 
{
	public function __construct($message = 'The input value is empty!', $status == 500) 
	{
		parent::__contruct($message, $status);
	}
}