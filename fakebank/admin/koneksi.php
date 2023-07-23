<?php 
$servername = "sql113.epizy.com";
$database = "epiz_32241845_isci";
$username = "epiz_32241845";
$password = "UdcXpiWbNC2IBV";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 
?>