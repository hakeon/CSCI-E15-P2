<?php

date_default_timezone_set('America/New_York');

$time = date('g:ia');
$hour = date('G');

if($hour >= 5 AND $hour < 12)
{
    $image = 'php-morning.png';
    $class = 'morning';
    $greeting = "good morning";
}

else if($hour >= 12 AND $hour < 17)
{
    $image = 'php-afternoon.png';
    $class = 'afternoon';
    $greeting = "good afternoon";
}

else if($hour >= 17 AND $hour < 21)
{
    $image = 'php-evening.png';
    $class = 'evening';
    $greeting = "good evening";
}

else
{
    $image = 'php-night.png';
    $class = 'night';
    $greeting = "good evening";
}

?>
