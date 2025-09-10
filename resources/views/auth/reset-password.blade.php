<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="">
    <title>Reset Password</title>
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
            background: url("{{ asset('assets/images/background_login.png') }}") no-repeat center center/cover;
            padding: 20px;
        }

        .wrapper {
            width: 100%;
            max-width: 480px;
            padding: 30px 25px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            color: #fff;
            text-align: center;
        }

        h1 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 14px;
            font-weight: 300;
            margin-bottom: 25px;
            color: #ccc;
        }

        .alert {
            margin-bottom: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            font-size: 14px;
            text-align: left;
        }

        .alert.success {
            background-color: rgba(0, 200, 0, 0.2);
            color: #00e676;
        }

        .alert.error {
            background-color: rgba(255, 0, 0, 0.2);
            color: #ff5252;
        }

        .input-field {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-field label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #fff;
        }

        .input-field input {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .input-field input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-field input:focus {
            border-color: #00d2ff;
            box-shadow: 0 0 5px #00d2ff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #00d2ff;
            color: #000;
            border: none;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
            font-size: 15px;
            margin-bottom: 15px;
        }

        button:hover {
            background: #0091c2;
            color: #fff;
        }

        .register {
            font-size: 14px;
            color: #fff;
        }

        .register a {
            color: #00d2ff;
            text-decoration: underline;
            font-weight: 600;
        }

        @media (max-width: 500px) {
            .wrapper {
                padding: 25px 20px;
            }
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <form action="{{ route('reset.password') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ old('email', $email) }}">
            <input type="hidden" name="otp" value="{{ old('otp', $otp) }}">

            <h1>Reset Password</h1>
            <h3>Masukkan password baru Anda</h3>

            @if ($errors->any())
                <div style="color:red; margin-bottom: 15px;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="input-field">
        <input type="password" name="password" id="password" required>
        <label>Password Baru</label>
        </div>

        <div class="input-field">
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            <label>Konfirmasi Password Baru</label>
        </div>

        <div style="margin-bottom: 10px;">
            <input type="checkbox" id="showPassword" onclick="togglePassword()">
            <label for="showPassword">Tampilkan Password</label>
        </div>

            <button type="submit">Reset Password</button>
        </form>
    </div>

<script>
function togglePassword() {
    const pw1 = document.getElementById("password");
    const pw2 = document.getElementById("password_confirmation");
    const type = pw1.type === "password" ? "text" : "password";
    pw1.type = type;
    pw2.type = type;
}
</script>

</body>
</html>



