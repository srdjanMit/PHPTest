<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/session.php";

global $db;

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
//var_dump($_POST);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        $message .= '<p class="alert alert-danger">Please enter your email</p>';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = '<p class="alert alert-danger">Invalid email format</p>';
        }
    }
    if (empty($password)) {
        $message .= '<p class="alert alert-danger">Please enter your password</p>';
    }

    if (empty($message)) {

        $query = "SELECT * FROM " . TBL_USERS . " WHERE `email` = '" . $email . "'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['userid'] = $row['id'];
                $_SESSION['user'] = $row;

                // redirect user to results page
                header("location: results.php");
                exit();
            } else {
                $message .= '<p class="alert alert-danger">The password in not valid</p>';
            }
        } else {
            $message .= '<p class="alert alert-danger">No user with that email address</p>';
        }
    }
}

require_once __DIR__ . "/template_login.php";
