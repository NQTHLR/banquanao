<?php
define("CURRENCY", "VNĐ");

$server = "banquanaoserver.mysql.database.azure.com";
$username = "sqladmin";
$password = "#Nqthlr123";
$database = "eco_admin";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {

    die("Lỗi kết nối" . mysqli_connect_error());
}
