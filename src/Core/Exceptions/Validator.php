<?php 

namespace Restool\Core\Exceptions;

/**
 * Exception in Common Validation
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

use Exception;

class Validator {

	/**
     * Validate Database Connection.
     *
     * @param array $connection
     * @return void
     */
	public static function checkDatabaseConnection($connection) {
		
		if (!$connection) {
			throw new Exception('No connection to the Database.');
		}
	}

	/**
     * Validate Input Empty.
     *
     * @param string $input
     * @param string $field
     * @return string
     */
	public static function isEmptyInput($input, $field) {
		
		if (empty($input)) {
			throw new Exception('The input value is empty! parameter key is ['.$field.']');
		}

		return $input;
	}

	/**
     * Validate Input Array.
     *
     * @param array $input
     * @param string $field
     * @return array
     */
	public static function isArrayInput($input, $field) {
		
		if (!is_array($input)) {
			throw new Exception('The input value is not a Array type! parameter key is ['.$field.']');
		}

		return $input;
	}

	/**
     * Validate Input Integer.
     *
     * @param integer $input
     * @param string $field
     * @return integer
     */
	public static function isNumericInput($input, $field) {
		
		if (!is_numeric($input)) {
			throw new Exception('The input value is not a Numeric type! parameter key is ['.$field.']');
		}

		return $input;
	}

	/**
     * Validate Input String.
     *
     * @param string $input
     * @param string $field
     * @return string
     */
	public static function isStringInput($input, $field) {
		
		if (!is_string($input)) {
			throw new Exception('The input value is not a String type! parameter key is ['.$field.']');
		}

		return $input;
    }

    /**
     * Validate Input Boolean.
     *
     * @param boolean $input
     * @param string $field
     * @return boolean
     */
    public static function isBooleanInput($input, $field) {
    	
    	if (!is_bool($input)) {
			throw new Exception('The input value is not a Boolean type! parameter key is ['.$field.']');
		}

		return $input;
    }
}