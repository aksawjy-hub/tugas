<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "simaku"; // Pastikan nama database ini sama dengan yang Anda buat di phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>