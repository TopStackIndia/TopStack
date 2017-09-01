<?php
require '../vendor/autoload.php';
use Entrecore\GTMetrixClient\GTMetrixClient;
use Entrecore\GTMetrixClient\GTMetrixTest;

$client = new GTMetrixClient();
$client->setUsername('Topstackindia@gmail.com');
$client->setAPIKey('6365c4496695319851e28a588e172a8e');

$client->getLocations();
$client->getBrowsers();
$test = $client->startTest('http://www.topstackindia.com/');
 
//Wait for result
while ($test->getState() != GTMetrixTest::STATE_COMPLETED &&
    $test->getState() != GTMetrixTest::STATE_ERROR) {
    $client->getTestStatus($test);
    sleep(5);
}