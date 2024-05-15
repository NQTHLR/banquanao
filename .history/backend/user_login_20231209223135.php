<?php
session_start();
include('../db/connect.php');

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from user_info where username='$username' and user_password='$password'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
                $_SESSION['username'] = $username;
                echo "<script>window.open('../index.php','_self')</script>";
        } else {
            echo "<script>alert('Invalid Username!')</script>";
        }
    } else {
        die(mysqli_error($conn));
    }
}
