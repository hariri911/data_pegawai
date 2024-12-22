<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="file.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    
</head>
<body>
    <h1>Tambah Data Pegawai</h1>
    <form action="proses.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="posisi">Posisi:</label>
        <input type="text" id="posisi" name="posisi"><br><br>

        <label for="gaji">Gaji:</label>
        <input type="number" id="gaji" name="gaji"><br><br>

        <button type="submit">Simpan</button>
         <a href="tabel.php">Kembali</a>
    </form>
   
</body>
</html>