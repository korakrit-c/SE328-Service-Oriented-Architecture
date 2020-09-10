<?php
require "common.php";
////////////////////////
$url = 'http://ionic.dev/';

$app = new \Slim\App;

// Get container
$container = $app->getContainer();
$container['view'] = function($container) {
    $view = new \Slim\Views\Twig('../src/templates/', [
        'cache' => '../src/cache/'
    ]);
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};

//Index
$app->get('/',function($request,$respond,$args) use($pdo){
    return $this->view->render($respond,'home.html',[
    ]);
});

// Route for Requisition
$app->get('/requisition/{requisition_id}', function ($request, $response, $args) use ($pdo) {
    $query = "SELECT * FROM requisition WHERE requisition_id = ?";
    $data = $pdo->query($query,array($args['requisition_id']));
    return $response->withJson($data);
});

// Get API for Requisition V1
$app->get('/get/requisition',function($request, $response, $args){
    global $url;
    $json = file_get_contents("$url/requisition/1");
    $obj = json_decode($json, true);

    return $this->view->render($response, 'show.html', [
        'Requisition_DATE' => $obj[0]['Requisition_DATE'],
        'Requisition_Desc' => $obj[0]['Requisition_Desc']
    ]);
});

$app->get('/list',function($request,$respond,$args) use($pdo){
    $query = "SELECT * FROM requisition";
    $data = $pdo->query($query);
    
    return $this->view->render($respond,'list.html',[
        'data'  => $data
    ]);
});

// Route for Lineitem Requisition
$app->get('/json/lineitem/{requisition_id}', function ($request, $response, $args) use ($pdo) {
    $query = "SELECT * FROM lineitem WHERE requisition_id = ?";
    $data = $pdo->query($query,array($args['requisition_id']));
    return $response->withJson($data);
});

// Get API for Lineitem Requisition 
$app->get('/lineitem/{requisition_id}',function($request, $response, $args){
    global $url;
    $json = file_get_contents($url.'/json/lineitem/'.$args['requisition_id']);
    $obj = json_decode($json, true);
  
    return $this->view->render($response,'lineitem.html',[
        'data'  => $obj,
        'Requisition_ID' => $obj[0]['Requisition_ID']
    ]);
});

// Add Product
$app->get('/add/product',function($request,$respond,$args){
    return $this->view->render($respond,'addproduct.html',[
    ]);
});
$app->post('/create/product',function($request,$respond,$args) use($pdo){
    $data = json_decode($request->getBody()) ?: $request->getParams();
    $product_name = $data['product_name'];
    $product_price = $data['product_price'];
    $product_inhand = $data['product_inhand'];
    $query = "INSERT INTO product (product_name,product_price,product_inhand,company_id,branch_id)
                VALUES(?,?,'9999','1','1')";
    $db = $pdo->query($query,array($product_name, $product_price, $product_inhand));

});

//Create Bill
$app->get('/add/bill',function($request,$respond,$args){
    return $this->view->render($respond, 'addbill.html', [
    ]);
});

$app->post('/create/bill',function($request,$respond,$args) use($pdo){
    $data = json_decode($request->getBody()) ?: $request->getParams();
    $product_name = $data['product_name'];
    $lineitem_qty = $data['lineitem_qty'];
    $lineitem_total = $data['lineitem_total'];
    $company_id = $data['company'];
    $branch_id = $data['branch'];

  


    $query = "INSERT INTO product (product_name,product_price,product_inhand,company_id,branch_id)
                VALUES(?,?,'9999','1','1')";

    
    $db = $pdo->query($query,array($product_name, $product_price, $product_inhand));

});

/* Get API for Requisition V2
$app->get('/get/requisition',function($request, $response, $args){
    $json = file_get_contents('http://ionic.dev/requisition/1');
    $obj = json_decode($json, true);

    $Requisition_DATE = $obj[0]['Requisition_DATE'];
    $response->getBody()->write("/getUserInfo => ".$Requisition_DATE);
    return $response;

});*/

$app->run();