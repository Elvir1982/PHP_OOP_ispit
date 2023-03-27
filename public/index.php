<?php
use Core\Bootstrap;
use Core\Connection;
define ('ROOT', realpath(__DIR__.'/../'));
require ROOT.'/vendor/autoload.php';

$bootstrap=new Bootstrap();
$bootstrap->boot();

$connection=Connection::getInstance(DB_DSN,DB_USER,DB_PASSWORD);

$connection1->query("delete from zanrovi where ID_zanra=5");


?>