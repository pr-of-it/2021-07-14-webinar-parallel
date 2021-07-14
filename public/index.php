<?php

$thread = new parallel\Runtime();

$time = time();
$future = $thread->run( function () use ($time) {
    while (true) {
        if (time() >= $time + 5) {
            return 'Success';
        }
    }
} );

while (true) {
    if ($future->done()) {
        echo 'Done:' . $future->value();
        break;
    }
    echo 'No...';
    sleep(1);
}