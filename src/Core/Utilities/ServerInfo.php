<?php

namespace Restool\Core\Utilities;

/**
 * Server Information
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

class ServerInfo {

	/**
     * Server Time.
     *
     * @return date
     */
	public static function time() {
		
		date_default_timezone_set("Asia/Manila");
        
        return date('Y-m-d H:i:s');
	}
}