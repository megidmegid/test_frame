<?php

namespace Controller;

class Test extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($param)
	{
		$param['hello_world'] = 'I am Index Controller';

		$testM = $this->loadModel('Test');
		$data = $testM->getTestData();

		if (!empty($data) && is_array($data)) {
			$param = array_merge($data, $param);
		}

		$this->assign($param);
		$this->display('test');
	}
}