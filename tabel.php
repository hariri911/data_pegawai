<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="file.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Posisi</th>
                <th>Gaji</th>
                <th>Update</th> 
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
                        <td><a href='ubah.php?id={$row['id']}'>Update</a></td> 
                    </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>