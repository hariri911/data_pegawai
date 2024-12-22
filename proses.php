<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];

    $query = "INSERT INTO pegawai (nama, email, posisi, gaji) 
              VALUES ('$nama', '$email', '$posisi', '$gaji')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan!";
        echo "<a href='tabel.php'>Kembali ke Halaman Utama</a>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
