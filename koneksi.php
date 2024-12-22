<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "data_pegawai";

$koneksi = mysqli_connect($host, $user, $password, $database);
$conn = new mysqli($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
