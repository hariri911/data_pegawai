<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>
    <form action="proses.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Posisi:</label>
        <input type="text" name="posisi"><br>
        <label>Gaji:</label>
        <input type="number" name="gaji"><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
