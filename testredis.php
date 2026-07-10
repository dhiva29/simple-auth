<?php

require 'vendor/autoload.php';

$client = new Predis\Client(
    'rediss://default:gQAAAAAAAccrAAIgcDI1OGM0YWRiMWM5ZDA0MTgxODk1MDIyNzI2NTQyZDM0Yg@cute-titmouse-116523.upstash.io:6379'
);

try {
    $client->set('foo', 'bar');

    echo "<h2>Redis Connected Successfully ✅</h2>";
    echo "Value: " . $client->get('foo');

} catch (Exception $e) {

    echo "<h2>Redis Error ❌</h2>";
    echo "<pre>";
    echo $e->getMessage();
    echo "</pre>";

}