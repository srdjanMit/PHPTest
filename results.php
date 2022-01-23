<?php

session_start();
require_once __DIR__ . "/config.php";

global $db;
$message = '';

if (!isset($_SESSION['userid'])) {
    header('location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
    $search = trim($_POST['search']);

    if (!empty($search)) {
        $query = "SELECT * 
                  FROM " . TBL_USERS . " 
                  WHERE `name` LIKE '%" . $search . "%'
                  OR `email` LIKE '%" . $search . "%'";

        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            $message .= '<p class="alert alert-danger">No results</p>';
        }
    } else {
        $message .= '<p class="alert alert-danger">Empty search</p>';
    }
}

require_once __DIR__ . "/template_results.php";


