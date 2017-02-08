<?php

namespace Restool\Core\Foundation\Response\Bridges;

/**
 * Response Bridge
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

interface ResponseInterface
{
	public function header();

	public function content($code, $message, $error);

	public function httpCode($code);
}