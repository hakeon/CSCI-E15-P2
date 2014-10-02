<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>

    <title>CSCI E-15 P2</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require 'logic.php'; ?>

</head>

<body>
    <h1> "Hello, World!" </h1>
    <h1> <?php echo $time; ?> </h1>

</body>

</html>
