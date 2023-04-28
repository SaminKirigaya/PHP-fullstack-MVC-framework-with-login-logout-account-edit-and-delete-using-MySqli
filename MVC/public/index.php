<?php

session_start(); // every time a user start and land in index it will auto start 

require_once '../app/init.php'; //jumping in init php to call parse url function

$app = new app(); // creating new app each time url is given