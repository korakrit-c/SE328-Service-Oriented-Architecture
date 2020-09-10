<?php
require "common.php";
////////////////////////

$app = new \Slim\App;
$app->get('/', function ($request, $response, $args) {
    return $response->getBody()->write("Hello!!! Welcome to Slim");
});

//////////////////
//TEST
/////////////////
$app->get('/test', function ($request, $response, $args) {
    $user_info = array("firstname" => "Korakrit",
                        "lastname" => "Chariyasathian");
    $response = $response->withJson($user_info);
    echo $response;
    
});


// Get User Information by JSON Format
$app->get('/getUserInfo/{username}', function ($request, $response, $args) {
	$user_info = array("firstname" => "Korakrit",
                        "lastname" => "Chariyasathian");
    return $response->withJson($user_info);
});

// Route
$app->get('/select/{us_id}', function ($request, $response, $args) use ($db_pdo, $demo, $util) {
    $select_stmt = $db_pdo->select()
        ->from('user_info')
        ->where('us_id', '=', $args['us_id']);

    $stmt = $select_stmt->execute();
	$data = $stmt->fetch();

    return $response->withJson($data);
});

$app->get('/select/{us_id}/{firstname}', function ($request, $response, $args) use ($db_pdo, $demo, $util) {
    $select_stmt = $db_pdo->select()
        ->from('user_info')
        ->where('us_id', '=', $args['us_id'])
        ->where('firstname', '=', $args['firstname']);

    $stmt = $select_stmt->execute();
	$data = $stmt->fetch();

    return $response->withJson($data);
});

$container = $app->getContainer();
$container['view'] = function($container) {
    $view = new \Slim\Views\Twig('../src/templates/', [
        'cache' => '../src/cache/'
    ]);
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};

$app->get('/test/getUserInfo', function ($request, $response, $args) {
	$json = file_get_contents('http://ionic.dev/select/1');
    $value = implode(" ", (array) json_decode($json));
    $obj = json_decode($json, true);
    $firstname = $obj['firstname'];
    $response->getBody()->write("/getUserInfo => ".$firstname);
    return $response;
});

$app->get('/test/getUserInfos',function($request, $response, $args){
    $json = file_get_contents('http://ionic.dev/select/1');
    $obj = json_decode($json, true);
    $firstname = $obj['firstname'];
    $firstname = $obj['us_id'];

    return $this->view->render($response, 'show.html', [
        'firstname' => $obj['firstname'],
        'us_id' => $obj['us_id']
    ]);
});

$app->get('/home',function($request, $response, $args){
    return $this->view->render($response, 'home.html', [
    ]);
});

$app->post('/post', function ($request, $response, $args) {

    var_dump($app->request()->post('id-r'));
    var_dump($app->request()->post('date'));

});

$app->get('/posts', function ($request, $response, $args) {

    return $this->view->render($response, 'home.html', [
    ]);
});

$app->run();
