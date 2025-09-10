<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- resources/views/auth/login.blade.php -->
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Login</title>
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

		.forgot_password {
		text-align: right;
		margin-top: 10px;
		margin-bottom: 5px;
		}

		.forgot_password a {
		color: #00bcd4;
		font-size: 14px;
		text-decoration: none;
		transition: all 0.3s ease;
		font-weight: 500;
		text-decoration: underline;
		}

		.forgot_password a:hover {
		color: #007ea7;
		text-decoration: underline;
		}

		.google-btn {
            background: #ffffff;
            color: #444;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .google-btn:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .google-btn img {
            height: 20px;
        }

    </style>
</head>
<body>
    <!-- resources/views/auth/login.blade.php -->
<div class="wrapper">
    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <h1>Login Page</h1>

        @if (session('error'))
            <p style="color:red;">{{ session('error') }}</p>
        @endif

        @if ($errors->any())
            <div style="color:red; margin-bottom: 15px;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Email -->
        {{-- <div class="input-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required>
        </div> --}}

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

        <button type="submit">Get Started</button>

        <div class="register">
            <p>Don't have an account?
                <a style="color:#0091c2" href="{{ route('register') }}">Register here</a>
            </p>
            <p style="margin-top:5px">
                <a style="color:#0091c2; " href="{{ route('password.request') }}">Forgot Password?</a>
            </p>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cek jika datang dari logout
    if (performance.navigation.type === 2) {
        window.location.href = "{{ url('/') }}"; // Redirect ke halaman index
    }

    // Handle tombol back
    window.onpopstate = function() {
        window.location.href = "{{ url('/') }}"; // Redirect ke halaman index
    };
    history.pushState(null, null, window.location.href);
});
</script>

</body>
</html>
