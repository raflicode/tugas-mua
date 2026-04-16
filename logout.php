<?php
session_start(); // Ambil session yang sedang aktif

// Menghapus semua data di session (seperti mengosongkan loker)
session_unset();

// Menghancurkan session (seperti membakar kunci lokernya)
session_destroy();

// Pindahkan user ke halaman login setelah logout
header("Location: public/login.php");
exit;
?>