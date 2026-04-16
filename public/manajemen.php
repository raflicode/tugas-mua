<?php 
include '../config/database.php'; // Pastikan file koneksi sudah benar
include 'includes/header.php'; 
include 'includes/sidebar.php'; 

// Ambil data dari tabel users
$query = "SELECT id, username, created_at FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<main class="ml-64 p-8 min-h-screen">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen User</h2>
            <p class="text-gray-500 text-sm">Mengelola data pengguna aplikasi</p>
        </div>
        <button class="bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition shadow-sm flex items-center gap-2">
            <span>+</span> Tambah User Baru
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="p-4 font-semibold text-gray-600 text-sm w-16 text-center">ID</th>
                    <th class="p-4 font-semibold text-gray-600 text-sm">Username</th>
                    <th class="p-4 font-semibold text-gray-600 text-sm">Tanggal Dibuat</th>
                    <th class="p-4 font-semibold text-gray-600 text-sm text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                <?php if(mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 text-sm text-gray-500 text-center"><?= $row['id']; ?></td>
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-xs font-bold text-gray-600">
                                    <?= strtoupper(substr($row['username'], 0, 1)); ?>
                                </div>
                                <span class="text-sm font-medium text-gray-800"><?= htmlspecialchars($row['username']); ?></span>
                            </div>
                        </td>
                        <td class="p-4 text-sm text-gray-500">
                            <?= date('d M Y, H:i', strtotime($row['created_at'])); ?>
                        </td>
                        <td class="p-4 text-sm text-center">
                            <div class="flex justify-center gap-2">
                                <a href="edit_user.php?id=<?= $row['id']; ?>" class="px-3 py-1 bg-blue-50 text-blue-600 rounded-md hover:bg-blue-100 transition">
                                    Edit
                                </a>
                                <a href="hapus_user.php?id=<?= $row['id']; ?>" 
                                   class="px-3 py-1 bg-red-50 text-red-600 rounded-md hover:bg-red-100 transition"
                                   onclick="return confirm('Yakin ingin menghapus user <?= $row['username']; ?>?')">
                                    Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="p-10 text-center text-gray-400">
                            <p>Belum ada data user di database.</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'includes/footer.php'; ?>