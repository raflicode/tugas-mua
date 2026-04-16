<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'login_sistem';

// Membuat koneksi menggunakan MySQLi
$conn = new mysqli($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    // Jika gagal, hentikan program dan tampilkan pesan error
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>