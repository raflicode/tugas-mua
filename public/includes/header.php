<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Flup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <header class="flex justify-between items-center p-4 bg-white border-b ml-64">
        <div class="relative w-1/3">
            <input type="text" placeholder="Cari data..." class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            <span class="absolute left-3 top-2.5 text-gray-400">🔍</span>
        </div>
        <div class="flex items-center gap-4">
            <button class="relative">🔔<span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span></button>
            <div class="text-right text-sm">
                <p class="font-bold">rfl.au</p>
                <p class="text-gray-500">Admin</p>
            </div>
            <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold">RF</div>
        </div>
    </header>