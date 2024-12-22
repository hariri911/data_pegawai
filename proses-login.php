<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM karwayan WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  session_start(); // Mulai sesi
  $_SESSION['username'] = $username; 
  header("Location:tabel.php"); 
  exit();
} else {
  echo "Username atau password salah.";
}

$conn->close();
?>