<?php

/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 4/03/15
 * Time: 4:18 PM
 */
class Connection
{
    static $_instance;
    private $_dataBase;
    private $_link;
    private $_password;
    private $_server;
    private $_user;

    private function __construct()
    {
        $this->_server = 'localhost';
        $this->_dataBase = 'reserzxc_encuestas';
        $this->_user = 'reserzxc_mm';
        $this->_password = 'Encuestas2015';
        $this->conexion();
    }

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __clone()
    {
    }

    private function conexion()
    {
        $this->_link = mysqli_connect($this->_server,
            $this->_user, $this->_password, $this->_dataBase);
    }

    public function run($sql)
    {
        return mysqli_query($this->_link, $sql);
    }

    public function query($stmt)
    {
        while ($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
        if (empty($rows))
            return FALSE;
        return $rows;
    }
}