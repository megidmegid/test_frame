<?php

namespace Model;

class Test extends Model
{
	public function __construct()
	{
		$this->db = self::getPdoConn('dev');
	}

	public function getTestData()
	{
		$rs = $tmp = [];
		$sql = "select * from test";
		$rs = $this->db->query($sql);

		if (empty($rs)) {
			return false;
		}

		foreach ($rs as $row) {
	        $tmp[] = $row;
	    }

	    if (!empty($tmp)) {
	    	$rs = $tmp;
	    }
		return $rs;
	}
}