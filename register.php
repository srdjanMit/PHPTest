<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/session.php";

global $db;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeatPassword = trim($_POST['repeatPassword']);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $message = '';
    $query = "SELECT * FROM " . TBL_USERS . " WHERE `email` = '" . $email . "'";
    $result = mysqli_query($db, $query);

// check if email address exist in db
    if (mysqli_num_rows($result) > 0) {
        $message .= '<p class="alert alert-danger">The email address already exists.</p>';
    } else {
        // validate name
        if (empty($name)) {
            $message .= '<p class="alert alert-danger">Please enter the name</p>';
        }
        // validate email
        if (empty($email)) {
            $message .= '<p class="alert alert-danger">Please enter the email address</p>';
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $message = '<p class="alert alert-danger">Invalid email format</p>';
            }
        }
        // validate password
        if (strlen($password) < 6) {
            $message .= '<p class="alert alert-danger">Password must have at least 6 characters</p>';
        }
        // validate repeat password
        if (empty($repeatPassword)) {
            $message .= '<p class="alert alert-danger">Please repeat password.</p>';
        } else {
            if (empty($message) && $password != $repeatPassword) {
                $message .= '<p class="alert alert-danger">Password didn\'t match.</p>';
            }
        }
        if (empty($message)) {
            $query = "INSERT INTO " . TBL_USERS . " (`name`, `email`, `password`)
                    VALUES ('" . $name . "', '" . $email . "', '" . $hashedPassword . "')";
            $result = mysqli_query($db, $query);
            if ($result) {
                $message .= '<p class="alert alert-success">You registered successfuly!</p>';
            } else {
                $message .= '<p class="alert alert-danger">Something went wrong!</p>';
            }
        }
    }
    mysqli_close($db);
}

require_once __DIR__ . "/template_register.php";


