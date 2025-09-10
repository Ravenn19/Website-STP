<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>List Data Buku</title>

  <link rel="icon" href="{{ asset('assets/images/Logo-HKI.png') }}" type="assets/images/png" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    .custom-sidebar { background-color: #0C4F6A; }
    .submenu { transition: max-height 0.4s ease-in-out; overflow: hidden; max-height: 0; }
    .submenu.show { max-height: 450px; }
    .rotate-180 { transform: rotate(180deg); }
  </style>
</head>
<body class="flex min-h-screen bg-gradient-to-br from-white to-blue-400">

  <!-- Sidebar -->
  <aside class="custom-sidebar w-64 p-6 flex flex-col justify-between text-white min-h-screen">
    <div>
      <div class="text-center mb-10">
        <img src="{{ asset('assets/images/Logo-HKI.png') }}" alt="Logo HKI" class="mx-auto w-32 h-32" />
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
          <button onclick="toggleSubmenu('submenu-pendaftaran', 'icon-pendaftaran')" class="flex justify-between items-center w-full p-2 rounded">
            <span>Pendaftaran Data</span>
            <svg id="icon-pendaftaran" class="w-3 h-3 transform rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
          </button>
          <div id="submenu-pendaftaran" class="submenu pl-4 space-y-2">
            <a href="{{ url('/admin2/pendaftaran-hki') }}" class="block p-2 rounded hover:bg-blue-400">HKI</a>
            <a href="{{ url('/admin2/pendaftaran-buku') }}" class="block p-2 rounded hover:bg-blue-400">Buku</a>
            <a href="{{ url('/admin2/pendaftaran-prototipe') }}" class="block p-2 rounded hover:bg-blue-400">Prototipe</a>
          </div>
        </div>

        <div>
          <button onclick="toggleSubmenu('submenu-list', 'icon-list')" class="flex justify-between items-center w-full p-2 rounded hover:bg-blue-400">
            <span>List Data</span>
            <svg id="icon-list" class="w-3 h-3 transform rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
          </button>
          <div id="submenu-list" class="submenu pl-4 space-y-2 show">
            <a href="{{ url('/admin2/list-hki') }}" class="block p-2 rounded hover:bg-blue-400">HKI</a>
            <a href="{{ url('/admin2/list-buku') }}" class="block p-2 rounded bg-blue-500">Buku</a>
            <a href="{{ url('/admin2/list-prototipe') }}" class="block p-2 rounded hover:bg-blue-400">Prototipe</a>
          </div>
        </div>
      </nav>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="w-full text-left flex items-center gap-2 p-2 rounded hover:bg-blue-400">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span>
        </button>
    </form>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 p-8">
    @if (session('success'))
      <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded">
        {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded">
        {{ session('error') }}
      </div>
    @endif

    <h1 class="text-3xl font-bold mb-6">List Data Buku</h1>

    <div class="overflow-auto bg-white rounded shadow-md">
      <table class="min-w-full text-sm text-left text-gray-800">
        <thead class="bg-gray-200 text-gray-700">
          <tr>
            <th class="py-2 px-4 border-b">No</th>
            <th class="py-2 px-4 border-b">Jenis</th>
            <th class="py-2 px-4 border-b">Judul</th>
            <th class="py-2 px-4 border-b">Pencipta</th>
            <th class="py-2 px-4 border-b">Tanggal Pengajuan</th>
            <th class="py-2 px-4 border-b">Dokumen</th>
            <th class="py-2 px-4 border-b">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($bukuList as $index => $item)
            <tr class="text-center border-b hover:bg-gray-50">
              <td class="border px-4 py-2">{{ $index + 1 }}</td>
              <td class="border px-4 py-2">{{ $item->jenis_buku }}</td>
              <td class="border px-4 py-2">{{ $item->judul_buku }}</td>
              <td class="border px-4 py-2">{{ $item->nama_pemohon }}</td>
              <td class="border px-4 py-2">{{ $item->tanggal_pengajuan }}</td>
              <td class="border px-4 py-2">
                @if ($item->dokumen)
                  <a href="{{ asset('storage/uploads/' . $item->dokumen) }}" target="_blank" class="text-blue-600 underline">Lihat Dokumen</a>
                @else
                  -
                @endif
              </td>
              <td class="py-2 px-4">
                <a href="{{ url('/admin2//hapus-buku/' . $item->id) }}" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus data ini?')">
                  Hapus
                </a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="py-4 text-center text-gray-500">Data kosong</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function toggleSubmenu(menuId, iconId) {
      const submenu = document.getElementById(menuId);
      const icon = document.getElementById(iconId);
      submenu.classList.toggle('show');
      icon.classList.toggle('rotate-180');
    }
  </script>
</body>
</html>
