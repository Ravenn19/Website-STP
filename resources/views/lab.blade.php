<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <title>Penyewaan Laboratorium - Futuristik</title>

    <style>
        :root {
            --primary: #00a8ff;
            --primary-dark: #0077b6;
            --secondary: #48dbfb;
            --bg-dark: #0a192f;
            --bg-darker: #020c1b;
            --text-light: #e6f1ff;
            --text-lighter: #ffffff;
            --glow: 0 0 10px rgba(0, 168, 255, 0.7);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: var(--bg-dark);
            color: var(--text-light);
            min-height: 100vh;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(0, 168, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(72, 219, 251, 0.1) 0%, transparent 50%);
            overflow-x: hidden;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
        }

        .header h1 {
            font-size: 2.5rem;
            color: var(--text-lighter);
            margin-bottom: 0.5rem;
            text-shadow: var(--glow);
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .header p {
            color: var(--secondary);
            font-size: 1.1rem;
        }

        .header::after {
            content: '';
            display: block;
            width: 150px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            margin: 1rem auto;
            border-radius: 3px;
            box-shadow: var(--glow);
        }

        .form-container {
            background: rgba(10, 25, 47, 0.7);
            border: 1px solid rgba(0, 168, 255, 0.2);
            border-radius: 10px;
            padding: 2rem;
            backdrop-filter: blur(5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3), var(--glow);
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent 45%,
                rgba(0, 168, 255, 0.1) 50%,
                transparent 55%
            );
            transform: rotate(30deg);
            animation: shine 6s infinite linear;
        }

        @keyframes shine {
            0% { transform: rotate(30deg) translate(-10%, -10%); }
            100% { transform: rotate(30deg) translate(10%, 10%); }
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--secondary);
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            background: rgba(2, 12, 27, 0.7);
            border: 1px solid rgba(0, 168, 255, 0.3);
            border-radius: 5px;
            color: var(--text-light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(0, 168, 255, 0.3);
            background: rgba(2, 12, 27, 0.9);
        }

        .form-control::placeholder {
            color: rgba(230, 241, 255, 0.5);
        }

        .form-row {
            display: flex;
            gap: 1.5rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2300a8ff'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.7rem top 50%;
            background-size: 1.5rem;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-top: 2rem;
        }

        .checkbox-group input {
            margin-right: 0.7rem;
            width: 1.2rem;
            height: 1.2rem;
            accent-color: var(--primary);
        }

        .checkbox-group label {
            margin-bottom: 0;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1.5rem;
            width: 100%;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 168, 255, 0.4);
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 168, 255, 0.6);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent 45%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 55%
            );
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }

        .digital-decoration {
            position: absolute;
            font-family: monospace;
            color: rgba(0, 168, 255, 0.1);
            font-size: 0.8rem;
            pointer-events: none;
            user-select: none;
        }

        .decoration-1 {
            top: 10%;
            left: 5%;
            transform: rotate(-15deg);
        }

        .decoration-2 {
            bottom: 15%;
            right: 5%;
            transform: rotate(10deg);
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 1rem;
            }

            .header h1 {
                font-size: 2rem;
            }
        }

        /* Animasi untuk elemen form */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-group {
            animation: fadeIn 0.5s ease forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }
        .form-group:nth-child(6) { animation-delay: 0.6s; }
        .form-group:nth-child(7) { animation-delay: 0.7s; }
        .form-group:nth-child(8) { animation-delay: 0.8s; }
        .form-group:nth-child(9) { animation-delay: 0.9s; }
        .checkbox-group { animation: fadeIn 0.5s ease 1s forwards; opacity: 0; }
        .submit-btn { animation: fadeIn 0.5s ease 1.2s forwards; opacity: 0; }

        /* Modal Style  */
        .success-toast {
            position: fixed;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #1f4068; /* warna biru tua */
            color: #fff;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
            z-index: 9999;
            animation: slideDown 0.4s ease;
            max-width: 90%;
            width: 400px;
            font-family: sans-serif;
        }

        .toast-content {
            position: relative;
        }

        .toast-content strong {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .toast-content p {
            margin: 0;
            font-size: 15px;
        }

        .close-toast {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 20px;
            color: #fff;
            cursor: pointer;
        }

        .close-toast:hover {
            color: #f1c40f;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translate(-50%, -20px);
            }
            to {
                opacity: 1;
                transform: translate(-50%, 0);
            }
        }

    </style>
</head>
<body style="">
    <div class="container">
        <div class="header">
            <h1>PENYEWAAN LABORATORIUM</h1>
            <p>Sistem Reservasi Laboratorium Berbasis Web</p>
        </div>

        <div class="form-container">
            @if(session('success'))
                <div id="successToast" class="success-toast">
                    <div class="toast-content">
                        <span class="close-toast" onclick="closeToast()">&times;</span>
                        <strong>Berhasil!</strong>
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            {{-- <span class="digital-decoration decoration-1">
                01010101 01101110 01101001 01110100 00100000 01001100 01100001 01100010 00100000 01010010 01100101 01110011 01100101 01110010 01110110 01100001 01110100 01101001 01101111 01101110
            </span> --}}

            <form id="labReservationForm" method="POST" action="{{ route('penyewaan.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="fullName">NAMA LENGKAP</label>
                        <input type="text" id="fullName" name="fullName" class="form-control" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email aktif" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">NO. HP / WHATSAPP</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Contoh: 081234567890" required>
                    </div>
                    <div class="form-group">
                        <label for="applicantType">JENIS PEMOHON</label>
                        <select id="applicantType" name="applicantType" class="form-control" required onchange="handleApplicantTypeChange()">
                            <option value="" disabled selected>Pilih jenis pemohon</option>
                            <option value="dosen_mahasiswa">Dosen/Mahasiswa</option>
                            <option value="lembaga_eksternal">Lembaga Eksternal</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">ALAMAT</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="Masukkan alamat lengkap" required>
                </div>

                <div class="form-group">
                    <label for="institution">ASAL INSTITUSI/PERUSAHAAN</label>
                    <input type="text" id="institution" name="institution" class="form-control" placeholder="Nama institusi/perusahaan" required>
                </div>

                <!-- FAKULTAS & LABORATORIUM -->
                <div id="faculty-group">
                    <div class="form-group">
                        <label for="faculty">FAKULTAS</label>
                        <select id="faculty" name="faculty" class="form-control" onchange="handleFacultyChange()">
                            <option value="" disabled selected>Pilih fakultas</option>
                            <option value="ften">FTEN - Fakultas Telematika Energi</option>
                            <option value="ftbe">FTBE - Fakultas Teknologi dan Bisnis Energi</option>
                            <option value="fket">FKET - Fakultas Ketenagalistrikan dan Energi Terbarukan</option>
                            <option value="ftik">FTIK - Fakultas Teknologi Infrastruktur dan Kewilayahan</option>
                            <option value="vokasi">Vokasi</option>
                        </select>
                    </div>
                </div>

                <!-- LABORATORIUM -->
                <div class="form-group">
                    <label for="lab">LABORATORIUM</label>
                    <select id="lab" name="lab" class="form-control" required>
                        <option value="" disabled selected>Pilih laboratorium</option>
                    </select>
                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="date">TANGGAL PENGGUNAAN</label>
                        <input type="text" id="date" name="date" class="form-control" placeholder="Pilih tanggal" required>
                    </div>

                    <div class="form-group">
                        <label for="time">WAKTU PENGGUNAAN</label>
                        <input type="time" id="time" name="time" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="file">UPLOAD SURAT PERMOHONAN (PDF/DOC/JPEG)</label>
                    <input type="file" id="file" name="file" class="form-control" accept=".pdf,.doc,.docx,.jpg,.jpeg" required>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="agreement" name="agreement" required>
                    <label for="agreement">Saya menyetujui bahwa data yang saya isi benar dan bersedia mengikuti peraturan penggunaan lab.</label>
                </div>

                <button type="submit" class="submit-btn">KIRIM PERMOHONAN</button>
            </form>

            {{-- <span class="digital-decoration decoration-2">
                01010011 01111001 01110011 01110100 01100101 01101101 00100000 01010010 01100101 01110011 01100101 01110010 01110110 01100001 01110011 01101001 00100000 01001100 01100001 01100010 01101111 01110010 01100001 01110100 01101111 01110010 01101001 01110101 01101101
            </span> --}}
        </div>
    </div>

    <script>
        const applicantType = document.getElementById('applicantType');
        const facultyGroup = document.getElementById('faculty-group');
        const facultySelect = document.getElementById('faculty');
        const labSelect = document.getElementById('lab');

        // Data laboratorium berdasarkan fakultas
        const labOptions = {
            ften: [
                "Multimedia Laboratory",
                "Software Architecture & Quality Laboratory (SAQ)",
                "Software Engineering Laboratory (SE)",
                "Intelligent Computing Laboratory (IC)",
                "Embedded System Laboratory (ES)",
                "Computer Network Laboratory (CN)",
                "Information Retrieval Laboratory (IR)",
                "Information Technology Certification Center (ITCC)",
                "Language Development Center (LDC)",
                "Virtual Reality Laboratory (VR)"
            ],
            ftbe: [
                "Laboratorium Material Teknik & Metalurgi",
                "Laboratorium Software Engineering",
                "Laboratorium PLTU Mini & Micro Hydro",
                "Phenomena and Control System Laboratory",
                "Laboratorium PLTMH"
            ],
            fket: [
                "Electrical Engineering Basic Laboratory 1",
                "Electrical Engineering Basic Laboratory 2",
                "Laboratorium Distribusi & Pemanfaatan Tenaga Listrik",
                "Intelligent Control and Automation Laboratory",
                "Electrical Machines Laboratory",
                "Fluid Mechanics and Thermodynamics Laboratory",
                "Electricity, Magnetism, Waves, and Optics Laboratory",
                "PLTS Laboratory",
                "High Voltage and Insulation Technology Laboratory",
                "Smart Electronic System Laboratory"
            ],
            ftik: [
                "Laboratorium Mekanika Tanah",
                "Laboratorium Hidrolika",
                "Laboratorium Beton",
                "Land Measurement Science Laboratory",
                "Engineering Computation Laboratory",
                "Laboratorium Kimia",
                "Waste to Energy Center",
            ],
            vokasi: [
                "Mechanics & Manufacturing Laboratory (Mesin Bubut)",
                "Mechanics & Manufacturing Laboratory (Kerja Bangku)",
            ]
        };

        // Gabungkan semua lab
        const allLabs = Object.values(labOptions).flat();

        function populateLabOptions(labs) {
            labSelect.innerHTML = '<option value="" disabled selected>Pilih laboratorium</option>';
            labs.forEach(lab => {
                const option = document.createElement('option');
                option.value = lab.toLowerCase().replace(/[^a-z0-9]+/g, '_');
                option.textContent = lab;
                labSelect.appendChild(option);
            });
        }

        // Fungsi saat jenis pemohon dipilih
        function handleApplicantTypeChange() {
            const selected = applicantType.value;

            if (selected === 'lembaga_eksternal') {
                facultyGroup.style.display = 'none';
                populateLabOptions(allLabs);
            } else if (selected === 'dosen_mahasiswa') {
                facultyGroup.style.display = 'block';
                labSelect.innerHTML = '<option value="" disabled selected>Pilih laboratorium</option>';
            } else {
                facultyGroup.style.display = 'none';
                labSelect.innerHTML = '<option value="" disabled selected>Pilih laboratorium</option>';
            }
        }

        // Fungsi saat fakultas dipilih
        function handleFacultyChange() {
            const selectedFaculty = facultySelect.value;
            if (labOptions[selectedFaculty]) {
                populateLabOptions(labOptions[selectedFaculty]);
            }
        }

        // Sembunyikan fakultas di awal
        window.addEventListener('DOMContentLoaded', () => {
            facultyGroup.style.display = 'none';
        });

    </script>


    <script>
        function closeToast() {
            const toast = document.getElementById('successToast');
            if (toast) toast.style.display = 'none';
        }

        // Auto-close dalam 5 detik
        window.onload = function() {
            const toast = document.getElementById('successToast');
            if (toast) {
                setTimeout(() => {
                    toast.style.display = 'none';
                }, 5000);
            }
        }
    </script>

    <!-- Tambahkan di akhir <body> sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#date", {
            dateFormat: "Y-m-d", // Format sesuai input backend
            minDate: "today",     // (opsional) Tidak bisa pilih tanggal lampau
            locale: "id"          // (opsional) agar hari/bulan pakai bahasa Indonesia
        });
    </script>


</body>
</html>
