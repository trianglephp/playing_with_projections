<?php

$start = microtime(true);
define('DATA_DIR', dirname(dirname(__FILE__)) . '/data');

require_once 'vendor/autoload.php';

$stream = new EventStream();
try {

    $events = $stream->fromFile(2);

    echo implode(', ', array_map(function($event) { return (strpos($event, 'egister') !== false) ? get_class($event) : null;}, $events));
} catch (Exception $e) {
    echo $e->getMessage();
}

echo PHP_EOL;
echo microtime(true) - $start;

