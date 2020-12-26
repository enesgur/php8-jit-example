<?php

function fibonacci($l){
    return(($l < 2) ? 1 : fibonacci($l - 2) + fibonacci($l - 1));
}

$l = 32;
$startTime = microtime(true);
$fibonacci = fibonacci($l);
$stopTime = microtime(true);

printf("Fibonacci-%s: %s\n Run Time: %s", $l, $fibonacci, $stopTime-$startTime);