<?php

session_start();

if (isset($_SESSION['userid']) && $_SESSION['userid'] == true) {
    header('location: results.php');
    exit();
}