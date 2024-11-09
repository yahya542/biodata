<?php
session_start();

// Koneksi ke database
$host = 'localhost'; // Ganti dengan host MariaDB Anda
$username = 'root'; // Ganti dengan username MariaDB Anda
$password = ''; // Ganti dengan password MariaDB Anda
$dbname = 'db_login'; // Nama database Anda

$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah user ada di database
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $db_username, $db_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $db_password)) {
        // Login berhasil
        $_SESSION['username'] = $db_username;
        $_SESSION['id'] = $id;
        header('Location: home.php');
    } else {
        // Login gagal
        echo "Username atau password salah!";
    }

    $stmt->close();
}

$conn->close();
?>
