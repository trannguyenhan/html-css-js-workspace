<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once(ROOT.DS.'config'.DS.'config.php');

#$backupFile = DB_NAME.'_data'.date("-YmdHis").'.db';
#$command = 'mysqldump --opt -h'.DB_HOST.' -u'.DB_USER.' -p'.DB_PASSWORD.' '.DB_NAME.' no-data add-drop-table > '.$backupFile;
#system($command);

$backupFile = ROOT.DS.'db'.DS.DB_NAME.date("-YmdHis").'.sql';
$command = 'mysqldump --opt -h'.DB_HOST.' -u'.DB_USER.' -p'.DB_PASSWORD.' '.DB_NAME.' > '.$backupFile;
system($command);

