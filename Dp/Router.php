<?php

namespace Dp;

class Router
{
	private $_controller;
	private $_action;

	public function __construct()
	{
		
	}

	public function dispatch()
	{
		$uri = $url = $_SERVER['REQUEST_URI'];
		if (false !== strpos($uri, '?')) {
			$url = substr($uri, 0, strpos($uri, '?'));
		}

		$routeArr = explode('/', $url);
		$routeInfo = [];
		foreach ($routeArr as $k => $v) {
			if (!empty($v)) {
				$routeInfo[] = $v;
			}
		}

		if (empty($routeInfo)) {
			$routeInfo[] = 'test';
			$routeInfo[] = 'index';
		}

		return $routeInfo;
	}
}