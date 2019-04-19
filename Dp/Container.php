<?php

namespace Dp;

class Container
{
	private $container;

	public function __construct()
	{
		// 被实例化时，加载路由类、参数类、响应类、
		$this->registDefaultService();
	}

	public function registDefaultService()
	{
		$this->container['request'] = function(){
			return new Request();
		};

		$this->container['router'] = function(){
			return new Router();
		};

		$this->container['param'] = function(){
			return new Param();
		};

		$this->container['response'] = function(){
			return new Response();
		};
	}

	public function __get($service)
	{
		return $this->container[$service]();
	}
}