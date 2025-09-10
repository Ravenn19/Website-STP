<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers2\Admin2Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\BannerController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\PreventBackHistory;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\ExclusiveController;
use App\Http\Controllers2\PdaftarHKIController;
use App\Http\Controllers2\PdaftarBukuController;
use App\Http\Controllers2\PdaftarPrototipeController;
use App\Http\Controllers2\ListHkiController;
use App\Http\Controllers2\ListBukuController;
use App\Http\Controllers2\ListPrototipeController;
use App\Http\Controllers\PresensiController;
use App\Models\User;
use App\Models\Banner;

use App\Http\Controllers\AuthController;

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/inovasi', 'inovasi')->name('inovasi');
    Route::get('/inkubasi', 'inkubasi')->name('inkubasi');
    // Route::get('/login', 'login')->name('login');
    Route::get('/laboratorium', 'laboratorium')->name('laboratorium');
    Route::get('/exclusive', 'exclusive')->name('exclusive');
    Route::get('/lab', 'lab')->name('lab');
    Route::get('/exc', 'exc')->name('exc');
    // Route::get('/register', 'register')->name('register');
});

// Authentication routes (Guest only)
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');

    // Register
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'processRegister'])->name('register.process');

    // Forgot Password
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('forgot.password');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOTP'])->name('forgot.password.send');

    Route::get('/verify-otp', [ForgotPasswordController::class, 'showVerifyOTPForm'])->name('verify.otp.form');
    Route::post('/verify-otp', [ForgotPasswordController::class, 'verifyOTP'])->name('verify.otp');

    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');
    });

//Edit Proporsal dan Admin Proporsal
Route::post('/user/upload-proposal', [DashboardController::class, 'uploadProposal'])->name('user.uploadProposal');
Route::post('/user/upload-profil-startup', [DashboardController::class, 'uploadProfilStartup'])->name('user.uploadProfilStartup');
Route::get('/user/download/{type}', [DashboardController::class, 'download'])->name('user.download');
Route::get('/admin/download/{id}/{type}', [AdminController::class, 'downloadUserFile'])->name('admin.download');
// Menampilkan daftar proposal dari semua user
Route::get('/admin/proposals', [AdminController::class, 'showProposals'])->name('admin.proposals');
// Menampilkan daftar profil startup dari semua user
Route::get('/admin/profiles', [AdminController::class, 'showProfiles'])->name('admin.profiles');
Route::get('/admin/toggle-proposal/{id}/{action}', [AdminController::class, 'toggleProposal'])->name('admin.toggleProposal');
//Batas Edit Proporsal dan Admin Proporsal

Route::get('/banners', [BannerController::class, 'allBanners'])->name('user.allBanners');


// User Dashboard routes (Auth required)
Route::prefix('user')->middleware(['auth', PreventBackHistory::class])->name('user.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('proposal-status', [DashboardController::class, 'proposalStatus'])->name('proposalStatus');

    // Banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('/upload-banner', [BannerController::class, 'upload'])->name('upload.banner');
    Route::get('/banners', [AdminController::class, 'allBanners'])->name('allBanners2');


    // Blog Routes
    Route::get('/blog', [BlogController::class, 'create'])->name('blog');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/your-blog', [BlogController::class, 'index'])->name('your-blog');
    Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blog/{blog}/modal', [BlogController::class, 'showModal'])->name('blog.modal');

    // File viewing
    Route::get('/files/{type}/{filename}', [DashboardController::class, 'viewFile'])->name('file.view');

    // Profile update (optional)
    Route::put('/profile', [DashboardController::class, 'updateProfile'])->name('profile.update');

    // ✅ Presensi
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/presensi', [DashboardController::class, 'presensiStore'])->name('presensi.store');
    Route::get('/presensi/riwayat', [DashboardController::class, 'presensiRiwayat'])->name('presensi.riwayat');
});

Route::get('/storage/uploads/{folder}/{subfolder}/{file}', function ($folder, $subfolder, $file) {
    $path = "uploads/$folder/$subfolder/$file";
    $fullPath = storage_path('app/public/' . $path);

    if (!file_exists($fullPath)) {
        abort(404);
    }

    return response()->file($fullPath);
});

// Logout (Auth required)
Route::post('/logout', [LogoutController::class, '__invoke'])->name('logout')->middleware('auth');

Route::get('/admin/dashboard', function () {
    if (session('admin_username') === 'Warek4itpln') {
        return view('admin.dashboard');
    }
    abort(403);
})->name('admin.dashboard');

// Admin routes - hanya bisa diakses oleh admin
Route::middleware(['admin:main_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/proposals', [AdminController::class, 'showProposals'])->name('admin.proposals');
    Route::get('/admin/profiles', [AdminController::class, 'showProfiles'])->name('admin.profiles');
    Route::get('/admin/blog', [AdminController::class, 'blog'])->name('admin.blog');

    Route::get('/admin/presence', [AdminController::class, 'presensiIndex'])->name('admin.presence');
});

// Admin2 routes - hanya bisa diakses oleh admin Buib1
Route::middleware(['admin:hki_admin'])->group(function () {

    // Dashboard
    Route::get('/admin2/dashboard', [Admin2Controller::class, 'dashboard'])->name('admin2.dashboard');

    // Pendaftaran HKI
    Route::get('/admin2/pendaftaran-hki', [PdaftarHkiController::class, 'index'])->name('pendaftaran-hki');
    Route::post('/admin2/pendaftaran-hki/simpan', [PdaftarHkiController::class, 'simpan'])->name('pendaftaran-hki.simpan');

    // Pendaftaran Buku
    Route::get('/admin2/pendaftaran-buku', [PdaftarBukuController::class, 'index'])->name('pendaftaran-buku');
    Route::post('/admin2/pendaftaran-buku/simpan', [PdaftarBukuController::class, 'simpan'])->name('pendaftaran-buku.simpan');

    // Pendaftaran Prototipe
    Route::get('/admin2/pendaftaran-prototipe', [PdaftarPrototipeController::class, 'index'])->name('pendaftaran-prototipe');
    Route::post('/admin2/pendaftaran-prototipe/simpan', [PdaftarPrototipeController::class, 'simpan'])->name('pendaftaran-prototipe.simpan');

    // List HKI
    Route::get('/admin2/list-hki', [ListHKIController::class, 'index'])->name('list-hki');
    Route::delete('/admin2/list-hki/{id}', [ListHKIController::class, 'hapus'])->name('list-hki.delete');

    // List Buku
    Route::get('/admin2/list-buku', [ListBukuController::class, 'index'])->name('list-buku');
    Route::delete('/admin2/list-buku/{id}', [ListBukuController::class, 'hapus'])->name('list-buku.delete');

    // List Prototipe
    Route::get('/admin2/list-prototipe', [ListPrototipeController::class, 'index'])->name('list-prototipe');
    Route::delete('/admin2/list-prototipe/{id}', [ListPrototipeController::class, 'hapus'])->name('list-prototipe.delete');

});



// Penyewaan Reservasi
Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');
Route::post('/penyewaan', [PenyewaanController::class, 'store'])->name('penyewaan.store');

Route::get('/excl', [ExclusiveController::class, 'index'])->name('excl.index');
Route::post('/excl', [ExclusiveController::class, 'store'])->name('excl.store');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])
     ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOTP'])
     ->name('password.email');

Route::get('/verify-otp', [ForgotPasswordController::class, 'showVerifyOTPForm'])
     ->name('verify.otp.form');

Route::post('/verify-otp', [ForgotPasswordController::class, 'verifyOTP'])
     ->name('verify.otp');

Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])
     ->name('reset.password');

Route::get('/test-banner', function () {
    $user = User::with('banner')->find(5);
    dd($user->banner?->path);
});


