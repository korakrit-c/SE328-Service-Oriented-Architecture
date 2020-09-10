<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

///////////////////////////
// Include Libaries file //
///////////////////////////
require '../vendor/autoload.php';
$config = require "../src/conf/constant.php";

///////////////////////////////
// Include Libaries Database //
///////////////////////////////
require '../src/app/DbLibs.php';
require '../src/app/Demo.php';
require '../src/app/Utility.php';

/////////////////////
// Initial Utility //
/////////////////////
$util = new Utility();

/////////////////////
// Initial datbase //
/////////////////////
// Initail class connect db //
$db_libs = new DbLibs();

// Prepare attribute connect database //		
$connect_info['hostname'] = $config['settings']['db']['hostname'];
$connect_info['db_name'] = $config['settings']['db']['database'];
$connect_info['db_username'] = $config['settings']['db']['username'];
$connect_info['db_password'] = $config['settings']['db']['password'];

// Call connect database //
$db_pdo = $db_libs->connectDB($connect_info);

// Initail class demo //
$demo = new Demo();

$db_obj = array('db_pdo' => $db_pdo, 
              'demo' => $demo);
$config = array_merge($config, $db_obj);

////////////////////////
// Initial Class slim //
////////////////////////
$app = new \Slim\App($config);