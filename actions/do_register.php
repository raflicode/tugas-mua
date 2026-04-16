<?php
require_once '../config/database.php'; // Ambil koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    // KEAMANAN: Mengacak password agar jika database bocor, password tetap aman
    $password_aman = password_hash($pass_input, PASSWORD_DEFAULT);

    // Persiapkan template query (Prepared Statement) untuk cegah SQL Injection
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    
    // "ss" artinya kita mengirim 2 data bertipe String
    $stmt->bind_param("ss", $user_input, $password_aman);

    if ($stmt->execute()) {
        header("Location: ../public/login.php");
    } else {
        header("Location: ../public/register.php?error=1");
    }
}
?>