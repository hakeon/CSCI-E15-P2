<?php

date_default_timezone_set('America/New_York');

$time = date('g:ia');
$hour = date('G');

if($hour >= 5 AND $hour < 12)
{
    $class = 'morning';
    $greeting = "good morning";
}

else if($hour >= 12 AND $hour < 17)
{
    $class = 'afternoon';
    $greeting = "good afternoon";
}

else if($hour >= 17 AND $hour < 21)
{
    $class = 'evening';
    $greeting = "good evening";
}

else
{
    $class = 'night';
    $greeting = "good evening";
}

?>
