<?php

session_start();

var_dump($_SESSION);
if (isset($_SESSION['userid']) && $_SESSION['userid'] == true) {
    unset($_SESSION['userid']);
    unset($_SESSION['user']);
    header('location: index.php');
}
