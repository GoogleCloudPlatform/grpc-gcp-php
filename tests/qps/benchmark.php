<?php

function print_stats($name, $stats)
{
    echo "stats result for ". $name .PHP_EOL;
    echo "Ave latency :". array_sum($stats)/max(count($stats), 1). PHP_EOL;
    echo "50% latency :". $stats[count($stats)*0.5]. PHP_EOL;
    echo "80% latency :". $stats[count($stats)*0.8]. PHP_EOL;
    echo "90% latency :". $stats[count($stats)*0.9]. PHP_EOL;
    echo "99% latency :". $stats[min(count($stats)*0.99, count($stats) - 1)]. PHP_EOL;
}
