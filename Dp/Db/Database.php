<?php

namespace Dp\Db;

interface Database
{
	public function connect();
	public function query($param);
	public function close();
}