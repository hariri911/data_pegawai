<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Posisi</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM pegawai";
            $result = mysqli_query($koneksi, $query);
            $no = 1;

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['posisi']}</td>
                        <td>{$row['gaji']}</td>
                    </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
