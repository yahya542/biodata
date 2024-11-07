<?php

// Konfigurasi koneksi ke MariaDB
$host = "localhost";  
$username = "root";         
$password = "deya2501";     
$database = "login_db";  

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
