<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="image/x-icon">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url("{{ asset('assets/images/background_login.png') }}"), #000;
        }

        .wrapper {
            width: 480px;
            padding: 30px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #fff;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .input-field {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-field label {
            font-weight: 600;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        .input-field input,
        .input-field textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            outline: none;
            transition: 0.3s;
        }

        .input-field textarea {
            height: 80px;
            resize: none;
        }

        .input-field input::placeholder,
        .input-field textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-field input:focus,
        .input-field textarea:focus {
            border-color: #00d2ff;
            box-shadow: 0 0 5px #00d2ff;
        }

        /* FILE UPLOAD */
        .file-upload {
            text-align: center;
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: 2px dashed rgba(255, 255, 255, 0.4);
        }

        .file-upload:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        .file-upload input {
            display: none;
        }

        .file-upload i {
            font-size: 20px;
        }

        /* CHECKBOX */
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .checkbox-group label {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .checkbox-group input {
            display: none;
        }

        .checkbox-group label:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .checkbox-group input:checked + label {
            background: #00b894;
            color: #fff;
        }

        /* BUTTON */
        button {
            width: 100%;
            padding: 12px;
            background: #00d2ff;
            color: #000;
            border: none;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0091c2;
            color: #fff;
        }

        .register {
            margin-top: 15px;
            font-size: 14px;
        }

		.file-name-preview {
			display: block;
			margin-top: 5px;
			font-size: 12px;
			color: #bbb;
			font-style: italic;
		}

    </style>
</head>
<body>
    <!-- resources/views/auth/register.blade.php -->
    <div class="wrapper">
        <form action="{{ route('register.process') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <h1>Pendaftaran Karya Inovasi</h1>

            @if ($errors->any())
                <div style="color:red; margin-bottom: 15px;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Email -->
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required>
            </div>

            <!-- Username -->
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" value="{{ old('username') }}" required>
            </div>

            <!-- Password -->
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <!-- Confirmation Password -->
            <div class="input-field">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password" required>
            </div>

            <!-- Nama Tim -->
            <div class="input-field">
                <label for="nama_tim">Nama Tim</label>
                <input type="text" id="nama_tim" name="nama_tim" placeholder="Masukkan nama tim" value="{{ old('nama_tim') }}" required>
            </div>

            <!-- Anggota Tim -->
            <div class="input-field">
                <label>Anggota</label>
                <input style="margin-bottom: 10px;" type="text" name="ketua" placeholder="Ketua Tim" value="{{ old('ketua') }}" required>
                <input style="margin-bottom: 10px;" type="text" name="anggota1" placeholder="Anggota 1" value="{{ old('anggota1') }}" required>
                <input style="margin-bottom: 10px;" type="text" name="anggota2" placeholder="Anggota 2" value="{{ old('anggota2') }}" required>
            </div>

            <!-- No. HP -->
            <div class="input-field">
                <label for="no_hp">No. HP Ketua Tim</label>
                <input id="no_hp" type="tel" class="form-control" name="no_hp" placeholder="+62 877-8393-3930" required>
            </div>

            <!-- File Proposal -->
            <div class="input-field">
                <label>File Proposal (PDF)</label>
                <label class="file-upload">
                    <i>📂</i>
                    <span>Upload Proposal</span>
                    <input type="file" name="proposal" id="proposal" accept=".pdf,.doc,.docx" required onchange="previewFileName('proposal', 'nama-proposal')">
                </label>
                <span id="nama-proposal" class="file-name-preview">Belum ada file</span>
            </div>

            <!-- Profil Startup -->
            <div class="input-field">
                <label>Profil Calon Startup (PDF)</label>
                <label class="file-upload">
                    <i>📂</i>
                    <span>Upload Profil</span>
                    <input type="file" name="profil_startup" id="profil-startup" accept=".pdf,.doc,.docx" required onchange="previewFileName('profil-startup', 'nama-profil')">
                </label>
                <span id="nama-profil" class="file-name-preview">Belum ada file</span>
            </div>

            <!-- Deskripsi Produk -->
            <div class="input-field">
                <label for="deskripsi">Deskripsi Produk</label>
                <textarea id="deskripsi" name="deskripsi" placeholder="Jelaskan tentang produk Anda" required>{{ old('deskripsi') }}</textarea>
            </div>

            <!-- Jenis Layanan -->
            <div class="input-field">
                <label>Jenis Layanan</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="iot" name="jenis_layanan[]" value="IoT"
                        {{ in_array('IoT', old('jenis_layanan', [])) ? 'checked' : '' }}>
                    <label for="iot">Internet of Things</label>

                    <input type="checkbox" id="ml" name="jenis_layanan[]" value="Machine Learning"
                        {{ in_array('Machine Learning', old('jenis_layanan', [])) ? 'checked' : '' }}>
                    <label for="ml">Machine Learning</label>

                    <input type="checkbox" id="eco" name="jenis_layanan[]" value="Eco Green"
                        {{ in_array('Eco Green', old('jenis_layanan', [])) ? 'checked' : '' }}>
                    <label for="eco">Eco Green</label>

                    <input type="checkbox" id="finance" name="jenis_layanan[]" value="Finance"
                        {{ in_array('Finance', old('jenis_layanan', [])) ? 'checked' : '' }}>
                    <label for="finance">Finance</label>

                    <input type="checkbox" id="edu" name="jenis_layanan[]" value="Education"
                        {{ in_array('Education', old('jenis_layanan', [])) ? 'checked' : '' }}>
                    <label for="edu">Education</label>

                    <input type="checkbox" id="other" name="jenis_layanan[]" value="Other"
                        {{ in_array('Other', old('jenis_layanan', [])) ? 'checked' : '' }}>
                    <label for="other">Other</label>
                </div>
            </div>

            <button type="submit">Register</button>

            <div class="register">
                <p>Have an account? <a style="color:#0091c2" href="{{ route('login') }}">Login here</a></p>
            </div>
        </form>
    </div>

    <script>
    function previewFileName(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            preview.textContent = input.files[0].name;
        } else {
            preview.textContent = 'Belum ada file';
        }
    }
    </script>
</body>


</html>
