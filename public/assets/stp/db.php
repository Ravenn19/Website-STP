<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'daftar_hki';


$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
