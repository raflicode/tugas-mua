<aside class="fixed left-0 top-0 h-screen w-64 bg-white border-r p-5">
    <div class="flex items-center gap-2 mb-10">
        <div class="bg-green-600 p-2 rounded-lg">
            <span class="text-white font-bold">⠿</span>
        </div>
        <h1 class="text-2xl font-bold text-gray-800">Flup</h1>
    </div>

    <nav class="space-y-1">
        <p class="text-xs font-semibold text-gray-400 uppercase mb-2">Menu Utama</p>
        <a href="dashboard.php" class="flex items-center gap-3 p-3 bg-green-100 text-green-700 rounded-xl font-medium">
            <span>📊</span> Dashboard
        </a>
        <a href="manajemen.php" class="flex items-center gap-3 p-3 text-gray-500 hover:bg-gray-100 rounded-xl transition">
    <span>👥</span> Manajemen MUA
</a>
        <a href="booking.php" class="flex items-center gap-3 p-3 text-gray-500 hover:bg-gray-100 rounded-xl transition">
            <span>📅</span> Booking
        </a>
        
        <p class="text-xs font-semibold text-gray-400 uppercase mt-8 mb-2">Sistem</p>
<a href="pengaturan.php" class="flex items-center gap-3 p-3 text-gray-500 hover:bg-gray-100 rounded-xl transition">
    <span>⚙️</span> Pengaturan
</a>

<a href="logout.php" class="flex items-center gap-3 p-3 text-red-500 hover:bg-red-50 transition" onclick="return confirm('Yakin mau keluar?')">
    <span>🚪</span> Keluar
</a>
    </nav>
</aside>