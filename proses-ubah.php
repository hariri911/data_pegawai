<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];

    $query = "UPDATE pegawai SET nama='$nama', email='$email', posisi='$posisi', gaji='$gaji' WHERE id=$id";
    $update = mysqli_query($koneksi, $query);

    if ($update) {
        header("Location: tabel.php");
    } else {
        die("Gagal memperbarui data: " . mysqli_error($koneksi));
    }
}
?>