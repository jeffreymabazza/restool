<?php

namespace Restool\Core\Foundation\Request\Adapters;

/**
 * Request Adapter
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Foundation\Request\Bridges\RequestInterface;

class RequestAdapter
{
	public function __construct(RequestInterface $request) 
	{
		$this->adapt = $request;
		return $this;
	}
}