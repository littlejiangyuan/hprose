<?php
require_once __DIR__ . '/../vendor/hprose-php/src/Hprose.php';

//http
use Hprose\Http\Server;

function hello($name) {
    return "Hello $name!";
}

sleep(1);

$server = new Server();
$server->addFunction('hello');

$server->start();


//file_put_contents('/tmp/jy.jj', json_encode($_SESSION));

exit;

/*
//tcp
use Hprose\Socket\Server;

function hello($name) {
    return "Hello $name!";
}

$server = new Server("tcp://0.0.0.0:1314");
$server->addFunction('hello');
$server->start();

*/

