<?php
/**
 * Created by PhpStorm.
 * User: r8r
 * Date: 2020-03-28
 * Time: 13:40
 */

namespace Bookshop;

class BaseObject {
	public function __call(string $name, array $arguments) {
		throw new \Exception('Method ' . $name . ' is not declared.');
	}

	public static function __callStatic(string $name, array $arguments) {
		throw new \Exception('Static method ' . $name . ' is not declared.');
	}

	public function __get(string $name) {
		throw new \Exception('Attribute ' . $name . ' is not declared.');
	}

	public function __set(string $name, $value) {
		throw new \Exception('Attribute ' . $name . ' is not declared.');
	}
}