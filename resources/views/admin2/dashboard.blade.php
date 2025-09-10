<!DOCTYPE html>
<html lang="id">
<head>
  <!-- ===== META & TITLE ===== -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <!-- ===== FAVICON ===== -->
  <link rel="icon" href="{{ asset('assets/images/Logo-HKI.png') }}" type="image/png">

  <!-- ===== STYLE & LIBRARY CSS ===== -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- ===== LIBRARY JS (Chart.js, Heroicons, etc) ===== -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0"></script>
  <script src="https://unpkg.com/heroicons@2.0.13/dist/20/outline/index.umd.js"></script>

  <!-- ===== CUSTOM STYLING ===== -->
  <style>
    .custom-sidebar { background-color: #0C4F6A; }
    .custom-bg { background-color: #AADAE6; }
    .submenu { transition: max-height 0.4s ease-in-out; overflow: hidden; max-height: 0; }
    .submenu.show { max-height: 450px; }
    .rotate-180 { transform: rotate(180deg); }
  </style>
</head>
<body class="flex min-h-screen bg-gradient-to-br from-white to-blue-400">

  <!-- ===== SIDEBAR ===== -->
  <div class="custom-sidebar w-64 p-6 flex flex-col justify-between text-white">
    <div>
      <!-- === LOGO DAN IDENTITAS === -->
      <div class="text-center mb-10">
        <img src="{{ asset('assets/images/Logo-HKI.png') }}" alt="Logo HKI" class="mx-auto w-32 h-32">
        <h1 class="text-lg font-bold">P U S A T</h1>
        <p class="text-xs">Hak Kekayaan Intelektual</p>
      </div>

      <!-- === USER INFO === -->
      <div class="text-center mb-10">
        <p class="font-semibold">Admin</p>
        {{-- <p class="text-xs">admin@gmail.com</p> --}}
      </div>

      <!-- === MENU NAVIGASI === -->
      <nav class="space-y-4">
        <!-- Link Dashboard -->
        <a href="{{ url('/admin2/dashboard') }}" class="block p-2 rounded bg-blue-500">Dashboard</a>

        <!-- Submenu Pendaftaran -->
        <div>
          <button onclick="toggleSubmenu('submenu-pendaftaran', 'icon-pendaftaran')" class="flex justify-between items-center w-full p-2 rounded hover:bg-blue-400">
            <span>Pendaftaran Data</span>
            <svg id="icon-pendaftaran" class="w-3 h-3 transition-transform duration-200 transform rotate-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
          </button>
          <div id="submenu-pendaftaran" class="submenu pl-4 space-y-2">
            <a href="{{ url('/admin2/pendaftaran-hki') }}" class="block p-2 rounded hover:bg-blue-400">HKI</a>
            <a href="{{ url('/admin2/pendaftaran-buku') }}" class="block p-2 rounded hover:bg-blue-400">Buku</a>
            <a href="{{ url('/admin2/pendaftaran-prototipe') }}" class="block p-2 rounded hover:bg-blue-400">Prototipe</a>
          </div>
        </div>

        <!-- Submenu List -->
        <div>
          <button onclick="toggleSubmenu('submenu-list', 'icon-list')" class="flex justify-between items-center w-full p-2 rounded hover:bg-blue-400">
            <span>List Data</span>
            <svg id="icon-list" class="w-3 h-3 transition-transform duration-200 transform rotate-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
          </button>
          <div id="submenu-list" class="submenu pl-4 space-y-2">
            <a href="{{ url('/admin2/list-hki') }}" class="block p-2 rounded hover:bg-blue-400">HKI</a>
            <a href="{{ url('/admin2/list-buku') }}" class="block p-2 rounded hover:bg-blue-400">Buku</a>
            <a href="{{ url('/admin2/list-prototipe') }}" class="block p-2 rounded hover:bg-blue-400">Prototipe</a>
          </div>
        </div>
      </nav>

      <!-- Script Toggle Submenu -->
      <script>
        function toggleSubmenu(menuId, iconId) {
          const submenu = document.getElementById(menuId);
          const icon = document.getElementById(iconId);
          submenu.classList.toggle('show');
          icon.classList.toggle('rotate-180');
        }
      </script>
    </div>

    <!-- === LOGOUT BUTTON === -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="w-full text-left flex items-center gap-2 p-2 rounded hover:bg-blue-400">
            <i class="fas fa-sign-out-alt"></i>
            <span>Sign Out</span>
        </button>
    </form>

  </div>

  <!-- ===== MAIN CONTENT ===== -->
  <div class="flex-1 p-10">
    <h1 class="text-2xl font-bold text-gray-700 mb-8">Dashboard</h1>

    <!-- === GRAFIK DATA === -->
    <div class="flex flex-col md:flex-row gap-6 mb-10">
      <!-- Grafik Line -->
      <div class="bg-white p-4 rounded-lg shadow-lg flex-1 min-h-[300px]">
        <canvas id="myChart" class="w-full h-full"></canvas>
      </div>

      <!-- Grafik Pie -->
      <div class="bg-white p-4 rounded-lg shadow-lg flex justify-center items-center">
        <canvas id="pieChart" class="w-full max-w-[350px] aspect-square"></canvas>
      </div>
    </div>

    <!-- === KOTAK RINGKASAN DATA === -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <div class="bg-gray-800 text-white p-6 rounded-lg text-center">
        <div class="text-2xl font-bold">{{ $totalHki }}</div>
        <div class="text-2xl font-bold">Total</div>
      </div>
      <div class="bg-blue-700 text-white p-6 rounded-lg text-center">
        <div class="text-2xl font-bold">{{ $totalPaten }}</div>
        <div class="text-2xl font-bold">Paten</div>
      </div>
      <div class="bg-green-700 text-white p-6 rounded-lg text-center">
        <div class="text-2xl font-bold">{{ $totalMerk }}</div>
        <div class="text-2xl font-bold">Merk</div>
      </div>
      <div class="bg-red-600 text-white p-6 rounded-lg text-center">
        <div class="text-2xl font-bold">{{ $totalCipta }}</div>
        <div class="text-2xl font-bold">Hak Cipta</div>
      </div>
    </div>

    <!-- === AKTIVITAS TERBARU === -->
    <div class="mt-8">
      <h2 class="text-xl font-semibold mb-4">Aktivitas Terbaru</h2>
      <div class="overflow-x-auto bg-white rounded shadow border">
        <table class="min-w-full text-sm text-left">
          <thead class="bg-blue-200">
            <tr>
              <th class="px-4 py-2">Tanggal</th>
              <th class="px-4 py-2">Jenis</th>
              <th class="px-4 py-2">Judul</th>
              <th class="px-4 py-2">Pemohon</th>
              <th class="px-4 py-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($aktivitas as $item)
              <tr class="border-t">
                <td class="px-4 py-2">{{ $item->tanggal }}</td>
                <td class="px-4 py-2">{{ $item->jenis }}</td>
                <td class="px-4 py-2">{{ $item->judul }}</td>
                <td class="px-4 py-2">{{ $item->pemohon }}</td>
                <td class="px-4 py-2">
                  <a href="{{ asset('uploads/' . $item->dokumen) }}" target="_blank" class="text-blue-600 hover:underline">Lihat Dokumen</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="px-4 py-2 text-center text-gray-500">Tidak ada aktivitas.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ===== CHART SCRIPT ===== -->
  <script>
    const bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    const paten = @json($patenMonthly);
    const merk = @json($merkMonthly);
    const hakCipta = @json($ciptaMonthly);

    // === LINE CHART ===
    new Chart(document.getElementById('myChart'), {
    type: 'line',
    data: {
      labels: bulan,
      datasets: [
        { label: 'Paten', data: paten, borderColor: 'blue', backgroundColor: 'blue', fill: false },
        { label: 'Merk', data: merk, borderColor: 'green', backgroundColor: 'green', fill: false },
        { label: 'Hak Cipta', data: hakCipta, borderColor: 'red', backgroundColor: 'red', fill: false }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        datalabels: {
          color: '#000',
          font: { weight: 'bold', size: 14 },
          formatter: (value, ctx) => {
            const total = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
            if (total === 0) return '0%';
            return ((value / total) * 100).toFixed(1) + '%';
            }

        }
      }
    }
  });

    // === PIE CHART ===
    // Ambil data dari backend
    const totalPaten = {{ $totalPaten ?? 0 }};
    const totalMerk = {{ $totalMerk ?? 0 }};
    const totalCipta = {{ $totalCipta ?? 0 }};

    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: ['Paten', 'Merk', 'Hak Cipta'],
            datasets: [{
            data: [totalPaten, totalMerk, totalCipta],
            backgroundColor: ['blue', 'green', 'red']
            }]
        },
        options: {
            responsive: true,
            plugins: {
            datalabels: {
                color: '#000',
                font: { weight: 'bold', size: 14 },
                formatter: (value, ctx) => {
                const total = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                if (total === 0) return '0%'; // ⬅️ baris penting agar tidak NaN%
                return ((value / total) * 100).toFixed(1) + '%';
                }
            }
            }
        },
        plugins: [ChartDataLabels]
    });

  </script>
</body>
</html>
