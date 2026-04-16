<?php
session_start(); // Memulai session untuk mengingat user
require_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    // Cari user berdasarkan username
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user_input);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah username ditemukan
    if ($row = $result->fetch_assoc()) {
        // Verifikasi password input dengan password ter-hash di database
        if (password_verify($pass_input, $row['password'])) {
            
            // KEAMANAN: Ganti ID session agar tidak dicuri (Session Fixation)
            session_regenerate_id();

            // Simpan data user ke dalam session (Loker Server)
            $_SESSION['is_login'] = true;
            $_SESSION['user_id']  = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Lempar user ke halaman dashboard
            header("Location: ../public/dashboard.php");
            exit;
        }
    }
    
    // Jika gagal, balikkan ke login dengan pesan error
    echo "Username atau Password salah!";
}
?>