<?php

namespace core;
use PDO;

class Api
{

    private $db;

    public function __construct($config = array())
    {
        $this->db = new PDO('mysql:host='.$config['dbhost'].';dbname='.$config['dbname'].';', $config['dbuser'], $config['dbpass']);
    }


    public function getUser($token, $params = array())
    {
        $checkToken = $this->checkToken($token);
        if ($checkToken)
        {
            return $this->createJson(array('data' => array('data' => '')));
        } else {
            return $this->createJson(array('error' => 400, 'desc' => 'Error api token'));
        }
    }


    public function getTour($token, $params = array())
    {

    }


    public function setUser($token, $params = array())
    {

    }


    public function setTour($token, $params = array())
    {

    }


    private function checkToken($token)
    {
        $token = htmlspecialchars(stripslashes(urldecode($token)));
        $db = $this->db->query("SELECT * FROM token WHERE token = '$token'")->fetch();
        if ($db['id'] != 0)
        {
            return true;
        } else {
            return false;
        }
    }


    private function createJson($params = array())
    {
        return json_encode($params);
    }


}