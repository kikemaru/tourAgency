<?php

namespace core;
use PDO;

class Api
{

    public $db;

    public function __construct($config = array())
    {
        $this->db = new PDO('mysql:host='.$config['dbhost'].';dbname='.$config['dbname'].';', $config['dbuser'], $config['dbpass']);
    }

}