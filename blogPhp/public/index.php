<?php
session_start();
define('SRC',__DIR__.'/../src/');
define('CONTROLLER',__DIR__.'/../src/Controller/');
define('MODEL',__DIR__.'/../src/Model/');
define('VIEW',__DIR__.'/../src/View/');

define('USER', 'root');
define('DATABASE','blog');
define('PASSWORD','root');

$bdd = new PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
require_once SRC.'Router.php';

run();