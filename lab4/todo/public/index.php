<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
// cai url nay cung co van de
$url = $_GET['url'];

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
