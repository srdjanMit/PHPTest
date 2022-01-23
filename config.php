<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const DB_SEREVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'PHPTest';

const TBL_USERS = '`PHPTest`.`users`';

$db = mysqli_connect(DB_SEREVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($db === false) {
    echo "Connection error: " . mysqli_connect_error();
}


