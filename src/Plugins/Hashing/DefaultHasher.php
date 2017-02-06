<?php

namespace Restool\Plugins\Hashing;

/**
 * DefaultHasher
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

use RuntimeException;

class DefaultHasher {

	/**
	 * Default cost for crypt
	 *
	 * @var int
	 */
	private $cost = 8;

	/**
	 * Hash given value.
	 *
	 * @param string $value
	 * @param int $cost
	 * @return string
	 * 
	 * @throws \RuntimeException 
	 */
	public function make($value, $cost = null) {

		$cost = isset($cost) ? $cost : $this->cost;

		$hash = password_hash($value, PASSWORD_DEFAULT, ['cost' => $cost]);

		if ($hash === false) {
			throw new RuntimeException('Hashing is not supported.');
		}

		return $hash;
	}

	/**
	 * Validate given hash.
	 *
	 * @param string $value
	 * @param string $hashed
	 * @param int $cost
	 * @return boolean
	 */
	public function validate($value, $hashed, $cost = null) {

		$cost = isset($cost) ? $cost : $this->cost;

		if (strlen($hashed) === 0) {
			return false;
		}

		return password_verify($value, $hashed, ['cost' => $cost]);
	}

	/**
	 * Check if the hashed need to re-hash for new value if so then
	 * generate new one.
	 * 
	 * @param string $value
	 * @param string $hashed
	 * @param int $cost
	 * @return string
	 */
	public function remake($value, $hashed, $cost = null) {

		$cost = isset($cost) ? $cost : $this->cost;

		if (!DefauleHasher::validate($value, $hashed, $cost)) {
			return 'Not valid hashed'; 
		}

		if (password_needs_rehash($hashed, PASSWORD_DEFAULT, ['cost' => $cost])) {
	        return DefaultHasher::make($value, $cost);
	    }

		return $hashed;
	}

	/**
	 * Check only if need re-hash.
	 *
	 * @param string $hashed
	 * @param int $cost
	 * @return string
	 */
	public function needsRehash($hashed, $cost = null) {

		$cost = isset($cost) ? $cost : $this->cost;

		return password_needs_rehash($hashed, PASSWORD_DEFAULT, ['cost' => $cost]);
	}
}