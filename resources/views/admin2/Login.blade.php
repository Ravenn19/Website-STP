<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASKER HKI</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('images/Logo-HKI.png') ?>" type="images/png">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .custom-bg {
      background-color: #AADAE6;
    }
    .custom-icon-bg {
      background-color: #0C4F6A;
    }
    .transition-scale {
      transition: transform 0.2s;
    }
    .transition-scale:active {
      transform: scale(0.95);
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white to-blue-100 p-6">
  <div class="custom-bg p-10 rounded-2xl shadow-lg w-full max-w-md text-center space-y-8">

  <!--------- Logo-HKI ----------->
  <img src="<?= base_url('images/Logo-HKI.png') ?>" alt="Logo HKI" class="mx-auto w-32 h-32">

    <h2 class="text-2xl font-semibold">Selamat Datang!</h2>

    <!-- Form Login -->
    <form action="<?= base_url('/login/auth') ?>" method="POST" class="space-y-6">
      <?= csrf_field() ?> <!-- CSRF token untuk keamanan -->
      
      <!-- Input Email -->
      <div class="flex items-center border border-gray-300 rounded overflow-hidden">
        <span class="custom-icon-bg p-3 text-white">
          <i class="fa-solid fa-user"></i>
        </span>
        <input type="email" name="email" placeholder="Email ID" class="w-full p-3 focus:outline-none" required>
      </div>
      
      <!-- Input Password -->
      <div class="flex items-center border border-gray-300 rounded overflow-hidden">
        <span class="custom-icon-bg p-3 text-white">
          <i class="fa-solid fa-lock"></i>
        </span>
        <input type="password" name="password" placeholder="Password" class="w-full p-3 focus:outline-none" required>
      </div>

      <!-- Remember Me -->
      <div class="flex items-center text-sm text-gray-600">
        <input type="checkbox" id="remember" name="remember" class="mr-2">
        <label for="remember">Remember Me</label>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-white text-blue-500 font-semibold py-3 rounded-full hover:bg-blue-100 transition-scale">Login</button>

      <!-- Error Message -->
      <?php if (session()->getFlashdata('error')): ?>
        <div class="text-red-500 text-sm">
          <?= session()->getFlashdata('error'); ?>
        </div>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>
