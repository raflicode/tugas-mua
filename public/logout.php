<?php
session_start(); // Memulai sesi agar bisa dihapus

// Menghapus semua data session
session_unset();

// Menghancurkan session yang ada di server
session_destroy();

// Redirect user kembali ke halaman login atau index
header("Location: login.php");
exit();
?>