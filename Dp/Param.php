<?php

namespace Dp;

class Param
{
	public function __construct()
	{
		
	}

	public function getParam()
	{
		// 处理参数逻辑。。。

		$param['a'] = '演示参数a';
		$param['b'] = '演示参数b';

		$uri = $_SERVER['REQUEST_URI'];
		$pos = strpos($uri, '?');
		if (false === strpos($uri, '?')) {
			return $param;
		}

		$query = substr($uri, $pos + 1);
		$queryArr = explode('&', $query);
		$queryParam = [];
		foreach ($queryArr as $k => $v) {
			$p = explode('=', $v);
			$queryParam[$p[0]] = $p[1];
		}

		$param = array_merge($param, $queryParam);

		return $param;
	}
}