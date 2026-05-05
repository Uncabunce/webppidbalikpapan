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
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Dashboard</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Permohonan</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Dokumen</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">User</a></li>
    <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Laporan</a></li>
  </ul>
</aside>

<!-- Main Content -->
<div class="ml-64 p-6">

  <!-- Header -->
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-semibold">Dashboard</h1>
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Logout</button>
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
</body>
</html>