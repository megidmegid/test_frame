<?php

namespace Controller;

class Controller
{
	private $_displayParam = [];
	private static $_modelInstance = [];

	public function __construct()
	{
		
	}

	public function assign($param)
	{
		$this->_displayParam = array_merge($this->_displayParam, $param);
	}

	public function loadModel($name)
	{
		if (empty(self::$_modelInstance[$name]) || !(self::$_modelInstance[$name] instanceof Model)) {
            $model = "Model\\$name";
            self::$_modelInstance[$name] = new $model();
        }

        return self::$_modelInstance[$name];
	}

	public function display($view)
	{
		require_once (BASE_PATH . DS . 'View' . DS . $view . '.html');
	}
}