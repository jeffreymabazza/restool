<?php

namespace Restool\Core\Loader;

/**
 * Autoload Core Class
 *
 * @author Joshua Clifford Reyes<reyesjoshuacliffrord@gmail.com>
 * @since January 2017
 */

class AutoLoader {

	/**
	 * Plugin name.
	 *
	 * @var string
	 */
	private $plugin;

	/**
	 * Route list.
	 *
	 * @var array
	 */
	private $routes;

	/**
	 * Set routes.
	 *
	 * @param string $plugin
	 * @param array $routes
	 * @return $this
	 */
	public function routes(string $plugin, array $routes) {
		
		$this->plugin = $plugin;
		$this->routes = $routes;
		return $this;
	}

	/**
	 * Performance: Time Complexity  
	 * 	- Worst-case O(n^2)
	 *
	 * @return void
	 */
	public function load() {

		foreach ($this->routes as $folder => $dir) {
			foreach ($dir as $class) {
	    		require_once($this->plugin.'/'.$folder.'/'.$class.'.php');
			}
		}
	}
}