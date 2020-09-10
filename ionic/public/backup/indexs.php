<?php
require "common.php";
////////////////////////

$app->get('/', function ($request, $response, $args) {
    return $response->getBody()->write("Hello!!! Welcome to Slim");
});

// Get Uer Information by JSON Format
$app->get('/getUserInfo/{username}', function ($request, $response, $args) {
	$user_info = array("firstname" => "pongthep", "lastname" => "lekhakul");
    return $response->withJson($user_info);
});

// Testing API
$app->get('/test/getUserInfo', function ($request, $response, $args) {
	$json = file_get_contents('http://ionic.dev/getUserInfo/1');
    $value = implode(" ", (array) json_decode($json));
    $response->getBody()->write("/getUserInfo => ".$value);
    return $response;
});

$app->get('/select/{us_id}', function ($request, $response, $args) use ($db_pdo, $demo, $util) {
	$util->logToFile("/var/test/", "_TEST", "Test:".$args['us_id']);
	//$data = $demo->getUser($db_pdo, $args['us_id']);
	            $select_stmt = $db_pdo->select()
                                   ->from('user_info')
                                   ->where('us_id', '=', $args['us_id']);
            $stmt = $select_stmt->execute();
            //$data = array($stmt->fetch());
			$data = $stmt->fetch();
	$util->logToFile("/var/test/", "_TEST", json_encode($data));
    return $response->withJson($data);
});
$app->run();
