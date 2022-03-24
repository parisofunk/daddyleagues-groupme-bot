<?php

// the admin bot setup

include('./httpful.phar');
include('./functions.php');

// this is found at http://dev.groupme.com/bots
$bot_token = "037fb3285b83e283724df754a1";

// adds admin commands 
$isAdmin = TRUE;
include('adminFunctions.php');

include('./index.php');

?>
