<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Saya</title>
</head>
<body>

<h2>Data dari Session</h2>

<?php
if (isset($_SESSION['nama'])) {
    echo "Nama kamu: <b>" . $_SESSION['nama'] . "</b>";
} else {
    echo "Belum ada data.";
}
?>

<br><br>
<a href="logout.php">Hapus Data</a>

</body>
</html>