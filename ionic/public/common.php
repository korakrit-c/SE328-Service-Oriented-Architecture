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
require '../src/class/pdo.php';


// Prepare attribute connect database //		
$pdo = new Db($config->setting->db->host, 
                $config->setting->db->database,
                $config->setting->db->username, 
                $config->setting->db->password);