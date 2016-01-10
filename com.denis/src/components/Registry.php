<?php


Class Registry{

	private static $vars = array();

	private function __construct(){}

	private function __clone(){}

	static function set($key, $var) {
		if (isset(self::$vars[$key]) == true) {
			throw new Exception('Unable to set var `' . $key . '`. Already set.');
		}
		self::$vars[$key] = $var;
		return true;
	}
	
	static function get($key) {
		if (isset(self::$vars[$key]) == false) {
			return null;
		}
		return self::$vars[$key];
	}

	function remove($var) {
		unset(self::$vars[$var]);
	}

}

