<?php
/**
 * Created by PhpStorm.
 * User: yuan
 * Date: 14/12/16
 * Time: 18:56
 */

//var_dump(curl_version());exit;

require_once __DIR__ . '/../vendor/hprose-php/src/Hprose.php';

//http
$client = new \Hprose\Http\Client('http://myhprose.com/', true);



$client->hello("async world", function ($res) {echo 'fuck';});

echo 'fffff';

exit;


/*
//tcp
$client = new \Hprose\Socket\Client('tcp://127.0.0.1:1314', false);

echo $client->hello("async world1");
*/