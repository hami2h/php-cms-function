<?php
session_start();
include_once 'functions.php';
function user_login($data)
{
    $connect = config();
    $username = sanitize($data['username']);
    $password = $data['password'];
    $sql = "select * from `user_tbl` where `username`='$username' and `password`='$password'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullname = $row['name'] . " " . $row['lastname'];
        $_SESSION['fullname'] = $fullname;
        header('location:dashboard.php');
        exit();
    } else {
        echo "NOT LOGIN";
    }
}
