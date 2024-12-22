<?php include 'proses-ubah.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pegawai</title>
  <link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>
    <h1>Edit Data Pegawai</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <br>
        <label for="posisi">Posisi:</label>
        <input type="text" name="posisi" value="<?php echo $row['posisi']; ?>">
        <br>
        <label for="gaji">Gaji:</label>
        <input type="text" name="gaji" value="<?php echo $row['gaji']; ?>">
        <br>
        <button type="submit">Simpan Perubahan</button>
        <button a href="tabel.php">Kembali</button>
    </form>
</body>
</html>