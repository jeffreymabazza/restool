<?php

namespace Restool\Plugins\Hashing;

/**
 * DefaultHasher (Sub Class)
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

use Restool\Plugins\Hashing\Hasher;

class DefaultHasher extends Hasher 
{
	/**
	 * DefaultHasher initialize contructor. 
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->setCost(8);
		
		$this->setHashAlgorithm(PASSWORD_DEFAULT);
	}
}