<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>

<h2>Input Nama</h2>

<form method="POST" action="simpan.php">
    <input type="text" name="nama" placeholder="Masukkan nama" required>
    <button type="submit">Simpan</button>
</form>

</body>
</html>