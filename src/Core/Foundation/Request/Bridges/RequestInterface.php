<?php

namespace Restool\Core\Foundation\Request\Bridges;

/**
 * Request Bridge
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

interface RequestInterface
{
	public function method($method);

	public function verifyAccess($headerKey);
}