<?php
define("CURRENCY", "VNĐ");

$server = "localhost";
$username = "root";
$password = "";
$database = "eco_admin";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {

    die("Lỗi kết nối" . mysqli_connect_error());
}
