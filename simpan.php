<?php
session_start();

$_SESSION['nama'] = $_POST['nama'];

header("Location: tampil.php");
exit;