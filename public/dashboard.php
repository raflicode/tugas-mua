<?php
session_start();

// Jika tidak ada session user (artinya belum login), tendang ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="ml-64 p-8 min-h-screen">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold">Ringkasan Statistik</h2>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">+ Tambah Laporan</button>
    </div>

    <div class="grid grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-sm border flex items-center gap-4">
            <div class="bg-blue-100 p-4 rounded-xl text-blue-600">👥</div>
            <div>
                <p class="text-gray-500 text-sm">Total User</p>
                <h3 class="text-2xl font-bold">1,240</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border flex items-center gap-4">
            <div class="bg-green-100 p-4 rounded-xl text-green-600">💵</div>
            <div>
                <p class="text-gray-500 text-sm">Pendapatan</p>
                <h3 class="text-2xl font-bold">Rp 12.5M</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border flex items-center gap-4">
            <div class="bg-yellow-100 p-4 rounded-xl text-yellow-600">⭐</div>
            <div>
                <p class="text-gray-500 text-sm">Rating</p>
                <h3 class="text-2xl font-bold">4.8 / 5</h3>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm border min-h-[300px] flex items-center justify-center">
        <p class="text-gray-400">Visualisasi Data Akan Muncul di Sini</p>
    </div>
</main>

<?php include 'includes/footer.php'; ?>