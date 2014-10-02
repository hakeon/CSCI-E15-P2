<?php

// Styling Logic from here to Dynamic Logic

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

// Dynamic Logic from this line down

if (isset($_POST['count']))
{
    $count = $_POST['count'];
}
else
{
    $count = 1;
}

if (isset($_POST['uppercase']))
{
    $uppercase = true;
}
else
{
    $uppercase = false;
}

if (isset($_POST['symbol']))
{
    $symbol = true;
}
else
{
    $symbol = false;
}

if (isset($_POST['number']))
{
    $number = true;
}
else
{
    $number = false;
}

if ($words = file('words.txt'))
{
    $selected_words = [];
    $symbols = ['@','#','$','!','&','*'];
    $numbers = [0,1,2,3,4,5,6,7,8,9];

    for($i = 0; $i < $count; $i++)
    {
        $max = count($words) -1;
        $rand = rand(0, $max);
            $word = $words[$rand];
            array_push($selected_words, $word);
    }

    if ($uppercase)
    {
        foreach ($selected_words as $index => $word) {
            $selected_words[$index] = ucfirst($word);
            echo $selected_words[$index] ,'<br />';
        }
    }

    if ($symbol)
    {
        //set symbol 
    }

    if ($number)
    {
        //set number
    }
}