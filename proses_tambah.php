<?php
session_start();
include "config/database.php";

$user_id = $_SESSION['user_id'];
$kategori_id = $_POST['kategori_id'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO transaksi (user_id, kategori_id, tipe, jumlah, keterangan, tanggal) 
        VALUES ('$user_id', '$kategori_id', '$tipe', '$jumlah', '$keterangan', '$tanggal')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php?status=sukses");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>