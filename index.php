<?php
define("www", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);
require_once (www.DS.'autoload.php');
use app\mvc\controller as cont;
$url = $_GET["url"]??false;



$teste = new cont\controller($url);




