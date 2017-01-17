<?php
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/../../../autoload.php')) {
    require_once __DIR__ . '/../../../autoload.php';
}

$generator = new \Emis\Tools\ProxyGenerator();
$client = new \Emis\Http\Client();
$client->setApiUrl('https://api-dev.emis.com/%s/%s/%s/?%s');
$generator->setClient($client);
$generator->run();
