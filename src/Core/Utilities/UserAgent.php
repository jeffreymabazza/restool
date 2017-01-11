<?php

namespace Restool\Core\Utilities;

/**
 * User Agent Information
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

class UserAgent {

	/**
     * Get Current Used Browser
     * Performance: Time Complexity
     *  - Worst-case O(1).
     *
     * @return string
     */
	public static function usedBrowser() {
		
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

		if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) {
			return 'Opera';	
		} else if (strpos($user_agent, 'Edge')) {
			return 'Edge';
		} else if (strpos($user_agent, 'Chrome')) {
			return 'Chrome';
		} else if (strpos($user_agent, 'Safari')) {
			return 'Safari';
		} else if (strpos($user_agent, 'Firefox')) {
			return 'Firefox';
		} else if (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) {
			return 'Internet Explorer';
		}
	}
}