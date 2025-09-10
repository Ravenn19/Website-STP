<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Prototipe</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/images/Logo-HKI.png') }}" type="image/png">

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    .custom-sidebar { background-color: #0C4F6A; }
    .custom-bg { background-color: #AADAE6; }
    .submenu { transition: max-height 0.4s ease-in-out; overflow: hidden; max-height: 0; }
    .submenu.show { max-height: 450px; }
    .rotate-180 { transform: rotate(180deg); }
  </style>
</head>
<body class="flex min-h-screen bg-gradient-to-br from-white to-blue-400">

  <!-- Sidebar -->
  <div class="custom-sidebar w-64 p-6 flex flex-col justify-between text-white min-h-screen">
    <div>
      <div class="text-center mb-10">
        <img src="{{ asset('assets/images/Logo-HKI.png') }}" alt="Logo HKI" class="mx-auto w-32 h-32">
        <h1 class="text-lg font-bold">P U S A T</h1>
        <p class="text-xs">Hak Kekayaan Intelektual</p>
      </div>
      <div class="text-center mb-10">
        <p class="font-semibold">Admin</p>
        <p class="text-xs">admin@gmail.com</p>
      </div>

      <nav class="space-y-4">
        <a href="{{ url('/admin2/dashboard') }}" class="block p-2 rounded hover:bg-blue-400">Dashboard</a>

        <div>
          <button onclick="toggleSubmenu('submenu-pendaftaran', 'icon-pendaftaran')" class="flex justify-between items-center w-full p-2 rounded hover:bg-blue-400">
            <span>Pendaftaran Data</span>
            <svg id="icon-pendaftaran" class="w-3 h-3 transition-transform transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
          </button>
          <div id="submenu-pendaftaran" class="pl-4 space-y-2">
            <a href="{{ url('/admin2/pendaftaran-hki') }}" class="block p-2 rounded hover:bg-blue-400">HKI</a>
            <a href="{{ url('/admin2/pendaftaran-buku') }}" class="block p-2 rounded hover:bg-blue-400">Buku</a>
            <a href="{{ url('/admin2/pendaftaran-prototipe') }}" class="block p-2 rounded bg-blue-500">Prototipe</a>
          </div>
        </div>

        <div>
          <button onclick="toggleSubmenu('submenu-list', 'icon-list')" class="flex justify-between items-center w-full p-2 rounded hover:bg-blue-400">
            <span>List Data</span>
            <svg id="icon-list" class="w-3 h-3 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
          </button>
          <div id="submenu-list" class="pl-4 space-y-2 hidden">
            <a href="{{ url('/admin2/list-hki') }}" class="block p-2 rounded hover:bg-blue-400">HKI</a>
            <a href="{{ url('/admin2/list-buku') }}" class="block p-2 rounded hover:bg-blue-400">Buku</a>
            <a href="{{ url('/admin2/list-prototipe') }}" class="block p-2 rounded hover:bg-blue-400">Prototipe</a>
          </div>
        </div>
      </nav>
    </div>

    <!-- Logout -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="w-full text-left flex items-center gap-2 p-2 rounded hover:bg-blue-400">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span>
        </button>
    </form>
  </div>

  <!-- Konten -->
  <div class="flex-1 p-10">
    <h1 class="text-2xl font-bold text-gray-700 mb-8">Pendaftaran Prototipe</h1>

    <div class="w-full max-w-5xl mx-auto bg-[#AADAE6] p-10 rounded-2xl shadow-lg">
      @if (session('success'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
          <strong class="font-bold">Sukses!</strong>
          <span>{{ session('success') }}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="this.parentElement.style.display='none';">
            <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 7.066 5.652a1 1 0 0 0-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 1 0 1.414 1.414L10 11.414l2.934 2.934a1 1 0 0 0 1.414-1.414L11.414 10l2.934-2.934a1 1 0 0 0 0-1.414z"/>
            </svg>
          </span>
        </div>
      @endif

      <form action="{{ url('/admin2/pendaftaran-prototipe/simpan') }}" method="post" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
          <label class="block text-gray-700 mb-2">Jenis Prototipe</label>
          <select name="jenis_prototipe" required class="w-full p-3 border border-gray-300 rounded hover:bg-gray-100">
            <option value="">Pilih Jenis Prototipe</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Mekanik">Mekanik</option>
            <option value="Perangkat Lunak">Perangkat Lunak</option>
          </select>
        </div>

        <div>
          <label class="block text-gray-700 mb-2">Judul Prototipe</label>
          <input name="judul_prototipe" type="text" required placeholder="Cth: Sistem Smart Home Berbasis IoT" class="w-full p-3 border border-gray-300 rounded hover:bg-gray-100">
        </div>

        <div>
          <label class="block text-gray-700 mb-2">Nama Pencipta</label>
          <input name="nama_pemohon" type="text" required placeholder="Cth: Putra Sitorus" class="w-full p-3 border border-gray-300 rounded hover:bg-gray-100">
        </div>

        <div>
          <label class="block text-gray-700 mb-2">Tanggal Pengajuan</label>
          <input name="tanggal_pengajuan" type="date" required class="w-full p-3 border border-gray-300 rounded">
        </div>

        <div>
          <label class="block text-gray-700 mb-2">Upload Dokumen (PDF)</label>
          <input name="dokumen" type="file" accept=".pdf" class="w-full p-2 border border-white-300 rounded">
        </div>

        <div class="text-right">
          <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-8 rounded-full hover:scale-105 transform transition">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function toggleSubmenu(menuId, iconId) {
      const submenu = document.getElementById(menuId);
      const icon = document.getElementById(iconId);
      submenu.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    }
  </script>
</body>
</html>
