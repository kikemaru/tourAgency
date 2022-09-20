<?php
//Точка входа в приложение
$config = [];
include_once './core/Api.php';
use core\Api;

$api = new Api($config);

header('Content-Type: application/json');

/*
 * Определение входных данных
 */
$api_key = htmlspecialchars(urldecode(stripslashes($_REQUEST['api_key'])));
$method = htmlspecialchars(urldecode(stripslashes($_REQUEST['method'])));
$params = htmlspecialchars(urldecode(stripslashes($_REQUEST['params'])));


$result = $api->$method($api_key, $params);


//вывод результата api
echo json_encode($result);


