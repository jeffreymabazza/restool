<?php

namespace REST;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RESTAutoLoader
 *
 * @author Joshua Clifford Reyes
 */

class RESTAutoLoader {

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
	 * @return class context
	 */
	public function routes(string $plugin, array $routes) {
		
		$this->plugin = $plugin;
		$this->routes = $routes;
		return $this;
	}

	/**
	 * Time and Space Complexity is O(n^2).
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