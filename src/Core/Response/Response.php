<?php

namespace Restool\Core\Response;

/**
 * Restool Primary Class Response
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since February 2017
 */

use Restool\Core\Utilities\ServerInfo;

class Response 
{
    /**
     * Set the response header.
     *
     * @param  int  $code - HTTP Code
     * @return void
     */
    public static function header() 
    {
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
     * Set the default resources JSON (RESTful) response.
     *
     * @param  int  $code - HTTP Code
     * @param  string  $message - Rsult Data of Request
     * @param  boolean  $error - Error Flag
     * @return json
     */
    public static function content($code = 200, $message = array(), $error = false) 
    {
        self::header();
        
        $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1');
        
        header($protocol .' '. $code .' '. self::httpCode($code));

        echo json_encode(
            array(
                'status' => self::httpCode($code),
                'message' => $message,
                'error' => $error,
                'server-time' => ServerInfo::time()
            )
        );
    }

    /**
     * List of HTTP code.
     *
     * @param  int  $code - HTTP Code
     * @return string
     */
    public static function httpCode($code) 
    {
        switch ($code) {
            case 100: return 'Continue';
            case 101: return 'Switching Protocols';
            case 200: return 'OK';
            case 201: return 'Created';
            case 202: return 'Accepted';
            case 203: return 'Non-Authoritative Information';
            case 204: return 'No Content';
            case 205: return 'Reset Content';
            case 206: return 'Partial Content';
            case 300: return 'Multiple Choices';
            case 301: return 'Moved Permanently';
            case 302: return 'Moved Temporarily';
            case 303: return 'See Other';
            case 304: return 'Not Modified';
            case 305: return 'Use Proxy';
            case 400: return 'Bad Request';
            case 401: return 'Unauthorized';
            case 402: return 'Payment Required';
            case 403: return 'Forbidden';
            case 404: return 'Not Found';
            case 405: return 'Method Not Allowed';
            case 406: return 'Not Acceptable';
            case 407: return 'Proxy Authentication Required';
            case 408: return 'Request Time-out';
            case 409: return 'Conflict';
            case 410: return 'Gone';
            case 411: return 'Length Required';
            case 412: return 'Precondition Failed';
            case 413: return 'Request Entity Too Large';
            case 414: return 'Request-URI Too Large';
            case 415: return 'Unsupported Media Type';
            case 500: return 'Internal Server Error';
            case 501: return 'Not Implemented';
            case 502: return 'Bad Gateway';
            case 503: return 'Service Unavailable';
            case 504: return 'Gateway Time-out';
            case 505: return 'HTTP Version not supported';
            default:
                exit('Unknown http status code "' . htmlentities($code) . '"');
                break;
        }
    }
}