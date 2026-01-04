<?php
header("Content-Type: application/json");
include "config/database.php";

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    // Mengambil semua data transaksi untuk publik/sharing
    $sql = "SELECT transaksi.*, kategori.nama_kategori FROM transaksi 
            JOIN kategori ON transaksi.kategori_id = kategori.id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode([
        "status" => "success",
        "message" => "Data Transaksi SIMAKU",
        "data" => $data
    ]);
}
?>