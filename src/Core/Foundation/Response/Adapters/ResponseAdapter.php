<?php

namespace Restool\Core\Foundation\Response\Adapters;

/**
 * Response Adapter
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Foundation\Response\Bridges\ResponseInterface;

class ResponseAdapter
{
	public function __construct(ResponseInterface $response) 
	{
		$this->adapt = $response;
		return $this;
	}
}