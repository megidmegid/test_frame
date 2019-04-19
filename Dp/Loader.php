<?php

namespace Dp;

class Loader
{
	public static function autoload($className = '')
	{
		// echo BASE_PATH . DS . $className . '.php';echo '<br/>';
		require_once( BASE_PATH . DS . $className . '.php');
	}
}