<?php

namespace Restool\Core\Response;

/**
 * Restool Primary Class Response
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

class Response {

	/**
     * Default JSON (RESTful) response.
     *
     * @param int $code - HTTP Code
     * @param string $message - Rsult Data of Request
     * @param boolean $error - Error Flag
     * @return json
     */
	public static function encode($code = 200, $message = array(), $error = false) {
		
		Response::header($code);

		if ($error) {
			echo json_encode($message);
			exit(0);
		}

        echo json_encode(
        	array(
		 		'status' => Response::httpCode($code),
	            'message' => $message,
	            'error' => $error,
        	)
        );
	}

	/**
     * Response Header.
     *
     * @param int $code - HTTP Code
     * @return void
     */
	public static function header($code) {
		
		$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1');
        
        header($protocol .' '. $code .' '. Response::httpCode($code));
        header("Content-Type: application/json;charset=utf-8");

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header('Access-Control-Allow-Origin: '. $_SERVER['HTTP_ORIGIN']);
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: '. 86400);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        	if ($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']) {
        		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");	
        	}
        	if ($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']) {
        		header('Access-Control-Allow-Headers: '. $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']);
        	}
            exit(0);
        }
	}

	/**
     * List of HTTP Code.
     *
     * @param int $code - HTTP Code
     * @return string
     */
	public static function httpCode($code) {

		switch ($code) {
            case 100: $text = 'Continue'; break;
            case 101: $text = 'Switching Protocols'; break;
            case 200: $text = 'OK'; break;
            case 201: $text = 'Created'; break;
            case 202: $text = 'Accepted'; break;
            case 203: $text = 'Non-Authoritative Information'; break;
            case 204: $text = 'No Content'; break;
            case 205: $text = 'Reset Content'; break;
            case 206: $text = 'Partial Content'; break;
            case 300: $text = 'Multiple Choices'; break;
            case 301: $text = 'Moved Permanently'; break;
            case 302: $text = 'Moved Temporarily'; break;
            case 303: $text = 'See Other'; break;
            case 304: $text = 'Not Modified'; break;
            case 305: $text = 'Use Proxy'; break;
            case 400: $text = 'Bad Request'; break;
            case 401: $text = 'Unauthorized'; break;
            case 402: $text = 'Payment Required'; break;
            case 403: $text = 'Forbidden'; break;
            case 404: $text = 'Not Found'; break;
            case 405: $text = 'Method Not Allowed'; break;
            case 406: $text = 'Not Acceptable'; break;
            case 407: $text = 'Proxy Authentication Required'; break;
            case 408: $text = 'Request Time-out'; break;
            case 409: $text = 'Conflict'; break;
            case 410: $text = 'Gone'; break;
            case 411: $text = 'Length Required'; break;
            case 412: $text = 'Precondition Failed'; break;
            case 413: $text = 'Request Entity Too Large'; break;
            case 414: $text = 'Request-URI Too Large'; break;
            case 415: $text = 'Unsupported Media Type'; break;
            case 500: $text = 'Internal Server Error'; break;
            case 501: $text = 'Not Implemented'; break;
            case 502: $text = 'Bad Gateway'; break;
            case 503: $text = 'Service Unavailable'; break;
            case 504: $text = 'Gateway Time-out'; break;
            case 505: $text = 'HTTP Version not supported'; break;
            default:
                exit('Unknown http status code "' . htmlentities($code) . '"');
            break;

            return $text;
        }
	}
}