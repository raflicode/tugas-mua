<?php
session_start(); // Cek "loker" session

// Jika tidak ada data 'is_login', artinya dia belum login
if (!isset($_SESSION['is_login'])) {
    // Tendang balik ke halaman login
    header("Location: ../public/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Flup Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f7f6; }
        /* Sidebar styling */
        .sidebar { width: 260px; min-height: 100vh; background: #fff; border-right: 1px solid #e0e0e0; }
        .nav-link { color: #6c757d; padding: 12px 20px; border-radius: 8px; margin: 4px 15px; }
        .nav-link.active { background-color: #d1e7dd; color: #198754; font-weight: 600; }
        .nav-link:hover:not(.active) { background-color: #f8f9fa; }
        
        /* Main Content area */
        .main-wrapper { flex: 1; display: flex; flex-direction: column; min-height: 100vh; }
        .header-top { height: 70px; background: #fff; border-bottom: 1px solid #e0e0e0; padding: 0 30px; }
        .content-body { padding: 30px; flex: 1; }
        .footer { background: #fff; border-top: 1px solid #e0e0e0; padding: 20px 30px; color: #6c757d; }
    </style>
</head>
<body>
    <div class="d-flex">
    <nav class="sidebar d-none d-lg-block">
        <div class="p-4 d-flex align-items-center">
            <i class="bi bi-grid-3x3-gap-fill text-success fs-3 me-2"></i>
            <span class="fs-4 fw-bold text-dark">Flup</span>
        </div>
        
        <div class="mt-3">
            <small class="text-uppercase text-secondary fw-bold px-4 mb-2 d-block" style="font-size: 10px;">Menu Utama</small>
            <a href="#" class="nav-link active"><i class="bi bi-speedometer2 me-3"></i>Dashboard</a>
            <a href="#" class="nav-link"><i class="bi bi-person-gear me-3"></i>Manajemen MUA</a>
            <a href="#" class="nav-link"><i class="bi bi-calendar-check me-3"></i>Booking</a>
            
            <small class="text-uppercase text-secondary fw-bold px-4 mt-4 mb-2 d-block" style="font-size: 10px;">Sistem</small>
            <a href="#" class="nav-link"><i class="bi bi-gear me-3"></i>Pengaturan</a>
            <a href="../logout.php" class="nav-link text-danger"><i class="bi bi-box-arrow-left me-3"></i>Keluar</a>
        </div>
    </nav>

    <div class="main-wrapper">
        
        <header class="header-top d-flex align-items-center justify-content-between">
            <div class="search-bar">
                <div class="input-group border-0">
                    <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-0" placeholder="Cari data...">
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="me-4 position-relative">
                    <i class="bi bi-bell fs-5 text-secondary"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                </div>
                <div class="d-flex align-items-center border-start ps-4">
                    <div class="text-end me-3">
                        <p class="m-0 fw-bold text-dark" style="font-size: 14px;"><?php echo htmlspecialchars($_SESSION['username']); ?></p>
                        <small class="text-secondary" style="font-size: 12px;">Admin</small>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['username']; ?>&background=random" class="rounded-circle" width="40" height="40">
                </div>
            </div>
        </header>

        <main class="content-body">
            <div class="container-fluid p-0">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold m-0">Ringkasan Statistik</h4>
                    <button class="btn btn-success btn-sm"><i class="bi bi-plus-lg me-2"></i>Tambah Laporan</button>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-3">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-4 text-primary"><i class="bi bi-people fs-3"></i></div>
                                <div><small class="text-secondary">Total User</small><h3 class="m-0 fw-bold">1,240</h3></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-3">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 p-3 rounded-3 me-4 text-success"><i class="bi bi-cash-stack fs-3"></i></div>
                                <div><small class="text-secondary">Pendapatan</small><h3 class="m-0 fw-bold">Rp 12.5M</h3></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-3">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-warning bg-opacity-10 p-3 rounded-3 me-4 text-warning"><i class="bi bi-star fs-3"></i></div>
                                <div><small class="text-secondary">Rating</small><h3 class="m-0 fw-bold">4.8 / 5</h3></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-4 p-4">
                    <h5 class="fw-bold mb-4">Aktivitas Terbaru</h5>
                    <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 200px;">
                        <p class="text-secondary small">Visualisasi Data Akan Muncul di Sini</p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer d-flex justify-content-between align-items-center">
            <p class="m-0 small">&copy; 2026 <strong>Flup Real Estate</strong>. All rights reserved.</p>
            <div class="small">
                <a href="#" class="text-decoration-none text-secondary me-3">Bantuan</a>
                <a href="#" class="text-decoration-none text-secondary">Privasi</a>
            </div>
        </footer>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>