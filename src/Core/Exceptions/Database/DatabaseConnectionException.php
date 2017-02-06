<?php 

namespace Restool\Core\Exceptions\Database;

/**
 * Database connection checker
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Exceptions\RestoolException;

class DatabaseConnectionException extends RestoolException 
{
	public function __construct($message = 'No connection to the Database.', $status = 500) 
	{
		parent::__contruct($message, $status);
	}
}