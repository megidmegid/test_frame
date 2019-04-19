<?php

namespace Dp\Db\Driver;

use Dp\Db\Database;

class Pdo implements Database
{
    private $_charset = 'utf8';
    private $_timeout = 600;
    private $_db;
    private $_config;

    public function __construct($config)
    {
        $this->_config = $config;
        $this->connect();
    }

    /**
     * 建立mysql连接
     */
    public function connect()
    {
        if ($this->_config != null) {
            try {
                $this->_config = current($this->_config);
                $options = array();
                if (!empty($this->_config['charset'])) {
                    $this->_charset = $this->_config['charset'];
                }
                $options[\PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES ' . $this->_charset;
                $this->_db = new \PDO($this->_config['dsn'], $this->_config['user'], $this->_config['pwd'], $options);
            } catch (\PDOException $e) {
                //返回客户端错误信息
                throw new \PDOException($e);
            }
        } else {
            trigger_error('配置参数不能为空', E_USER_WARNING);
        }

        $this->_init();
    }

    private function _init()
    {
        $this->_db->setAttribute(\PDO::ATTR_CASE, \PDO::CASE_LOWER);
        $this->_db->setAttribute(\PDO::ATTR_TIMEOUT, $this->_timeout);
        $this->_db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->_db->setAttribute(\PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    }

    public function close()
    {
        $this->_db = null;
    }

    public function query($sql)
    {
        $result = $this->_db->query($sql);
        return $result;
    }
}