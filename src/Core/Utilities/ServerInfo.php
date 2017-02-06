<?php

namespace Restool\Core\Utilities;

/**
 * Server Information
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

class ServerInfo 
{
	/**
     * Get Current Server DateTime
     *
     * @return date
     */
	public static function time($timezone = 'Asia/Manila') 
	{
		date_default_timezone_set($timezone);

        return date('Y-m-d H:i:s');
	}
}