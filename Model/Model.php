<?php

namespace Model;

use Dp\Db\Driver\Pdo;

class Model
{
	public static $_pdoInstance;

	public function __construct()
	{

	}

	/**
     * 数据库连接
     *
     * @param type $config
     * @return type
     */
    public static function getPdoConn($config)
    {
        if (empty(self::$_pdoInstance[$config]) || !(self::$_pdoInstance[$config] instanceof Pdo)) {
            $dbConf = require(CONF_PATH . DS . 'Database.php');
            self::$_pdoInstance[$config] = new Pdo($dbConf);
        }

        return self::$_pdoInstance[$config];
    }
}