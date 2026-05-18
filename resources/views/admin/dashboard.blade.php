<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard PPID</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<aside class="w-64 h-screen bg-white shadow fixed">
  <div class="p-4 text-xl font-bold border-b">PPID Admin</div>
  <ul class="p-4 space-y-2">
    <li><a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-100">Dashboard</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Permohonan</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Dokumen</a></li>

    <!-- Berita dengan Submenu -->
    <li>
      <button onclick="toggleBerita()" class="w-full text-left p-2 rounded hover:bg-gray-100 flex justify-between items-center">
        <span>Berita</span>
        <span id="berita-arrow" class="text-xs text-gray-400">▼</span>
      </button>
      <ul id="berita-submenu" class="hidden ml-3 mt-1 space-y-1 border-l-2 border-blue-100 pl-2">
        <li>
          <a href="{{ route('admin.news.create') }}" class="block p-2 rounded hover:bg-blue-50 text-blue-600 text-sm">
            + Tambah Berita
          </a>
        </li>
        <li>
          <a href="{{ route('admin.news.index') }}" class="block p-2 rounded hover:bg-blue-50 text-blue-600 text-sm">
            ✏ Edit Berita
          </a>
        </li>
      </ul>
    </li>

    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Laporan</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Pengaturan</a></li>
  </ul>
  <form action="{{ route('admin.logout') }}" method="POST" class="px-4 mt-2">
    @csrf
    <button type="submit" class="w-full bg-blue-600 text-white px-8 py-2 rounded hover:bg-blue-700">Logout</button>
  </form>
</aside>

<!-- Main Content -->
<div class="ml-64 p-6">

  <!-- Header -->
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-semibold">Dashboard</h1>
  </div>

  <!-- Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-gray-500">Total Permohonan</h2>
      <p class="text-2xl font-bold">120</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-gray-500">Dokumen Publik</h2>
      <p class="text-2xl font-bold">45</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-gray-500">Diproses</h2>
      <p class="text-2xl font-bold">10</p>
    </div>
  </div>

  <!-- Table -->
  <div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Data Permohonan</h2>
    <table class="w-full text-sm text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-2">Nama</th>
          <th class="p-2">Informasi</th>
          <th class="p-2">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-2">Andi</td>
          <td class="p-2">Data Anggaran</td>
          <td class="p-2 text-yellow-600">Diproses</td>
        </tr>
        <tr>
          <td class="p-2">Budi</td>
          <td class="p-2">Laporan Kegiatan</td>
          <td class="p-2 text-green-600">Selesai</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script>
function toggleBerita() {
    var menu = document.getElementById('berita-submenu');
    var arrow = document.getElementById('berita-arrow');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        arrow.textContent = '▲';
    } else {
        menu.classList.add('hidden');
        arrow.textContent = '▼';
    }
}

// Auto buka submenu kalau sedang di halaman news
var path = window.location.pathname;
if (path.includes('/admin/news')) {
    document.getElementById('berita-submenu').classList.remove('hidden');
    document.getElementById('berita-arrow').textContent = '▲';
}
</script>
</body>
</html>