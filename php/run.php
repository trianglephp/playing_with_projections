<?php

$start = microtime(true);
define('DATA_DIR', dirname(dirname(__FILE__)) . '/data');

require_once 'vendor/autoload.php';

$stream = new EventStream();
try {

    $events = $stream->fromFile(2);

    $cnt = 0;

    foreach ($events as $event) {
	    $cnt++;
	    print $cnt . ": " . get_class($event) . ", ";
    }

    print "\n\nCount of Events: " . $cnt;
} catch (Exception $e) {
    echo $e->getMessage();
}

echo PHP_EOL;
echo microtime(true) - $start;

