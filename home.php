<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
echo "<a href='logout.php'>Logout</a>";
?>
