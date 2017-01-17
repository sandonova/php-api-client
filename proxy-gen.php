<?php
require_once "vendor/autoload.php";

$generator = new \Emis\Tools\ProxyGenerator();
$client = new \Emis\Http\Client();
$client->setApiUrl('https://api-dev.emis.com/%s/%s/%s/?%s');
$generator->setClient($client);
$generator->run();
