<?php

namespace Restool\Plugins\Hashing;

/**
 * BycryptHasher (Sub Class)
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

use Restool\Plugins\Hashing\Hasher;

class BycryptHasher extends Hasher 
{
	/**
	 * BycryptHaser initialize contructor. 
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->setCost(10);
		$this->setHashAlgorithm(PASSWORD_BCRYPT);
	}
}