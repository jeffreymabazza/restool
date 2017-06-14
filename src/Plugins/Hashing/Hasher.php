<?php

namespace Restool\Plugins\Hashing;

/**
 * Hasher (Super Class)
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since June 2017
 */

use RuntimeException;

abstract class Hasher 
{
	/**
	 * Default cost for crypt.
	 *
	 * @var int
	 */
	protected $cost = 0;

	/**
	 * The define algo that will be using for the password_hash function.
	 *
	 * @var string|const
	 */
	protected $hashAlgorithm = null;

	/**
	 * Set the value for the cost field. 
	 *
	 * @param  int $cost
	 * @return void
	 */
	public function setCost($cost) 
	{
		$this->cost = $cost;
	}

	/**
	 * Get the value for the cost field. 
	 *
	 * @return int
	 */
	public function getCost()
	{
		return $this->cost;
	}

	/**
	 * Set the value for the hash algorithm field. 
	 *
	 * @param  string|const $hashAlgorithm
	 * @return void
	 */
	public function setHashAlgorithm($hashAlgorithm) 
	{
		$this->hashAlgorithm = $hashAlgorithm;
	}

	/**
	 * Get the value for the hash algorithm field. 
	 *
	 * @return string|const
	 */
	public function getHashAlgorithm()
	{
		return $this->hashAlgorithm;
	}

	/**
	 * Hash given value.
	 *
	 * @param string $value
	 * @param int $cost
	 * @return string
	 * 
	 * @throws \RuntimeException 
	 */
	public function make($value, $cost = null) 
	{
		$this->validateHashAlogrithmField();

		$cost = isset($cost) ? $cost : $this->cost;

		$hash = password_hash($value, $this->hashAlgorithm, ['cost' => $cost]);

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
	public function validate($value, $hashed, $cost = null) 
	{
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
	public function remake($value, $hashed, $cost = null) 
	{
		$this->validateHashAlogrithmField();

		$cost = isset($cost) ? $cost : $this->cost;

		if (!$this->validate($value, $hashed, $cost)) {
			return 'Not valid hashed'; 
		}

		if (password_needs_rehash($hashed, $this->hashAlgorithm, ['cost' => $cost])) {
	        return $this->make($value, $cost);
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
	public function needsRehash($hashed, $cost = null) 
	{
		$this->validateHashAlogrithmField();

		$cost = isset($cost) ? $cost : $this->cost;

		return password_needs_rehash($hashed, $this->hashAlgorithm, ['cost' => $cost]);
	}

	/**
	 * Validate if the hash algorithm field is not set to null.
	 *
	 * @return void
	 */
	private function validateHashAlogrithmField()
	{
		if ($this->hashAlgorithm == null) {
			throw new RuntimeException('Hashing algorithm is set to null please provide hash algorithm.');
		}
	}
}