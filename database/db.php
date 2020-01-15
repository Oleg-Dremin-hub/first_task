<?php
class DB
{
    private $_db;
    static $_instance;

    private function __construct()
    {
        $this->_db = new PDO('mysql:host=localhost;dbname=test', 'oleg_dev', '24062000'); // Connect to database with PDO
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // private function __clone(){}

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function query($sql)
    { // Query requests
        return $this->_db->query($sql);
    }
}
