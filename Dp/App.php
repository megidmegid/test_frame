<?php

namespace Dp;

class App
{
	public function run()
	{
		// 实例化简易容器
		$c = new Container();

		// 路由规则
		$routeInfo = $c->router->dispatch();
		$args = $c->param->getParam();

		$action = array_pop($routeInfo);
		$controller = 'Controller' . DS . ucfirst(implode("\\", $routeInfo));

		// is_callable(name)
		// call_user_func_array(array(new $controller, $action), $args);
		$cc = new $controller;
		$rs = $cc->$action($args);

		// log
	}
}