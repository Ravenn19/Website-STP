<?php

namespace App\Http\Controllers2;
use App\Models\hki\AdminModel;
use Illuminate\Routing\Controller as BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('login'); // Menampilkan halaman login
    }

    public function auth()
    {
        $session = session();
        $model = new AdminModel();

        // Mendapatkan email dan password yang dimasukkan
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Mencari admin berdasarkan email
        $admin = $model->where('email', $email)->first();

        // Jika admin ditemukan dan password cocok
        if ($admin && password_verify($password, $admin['password'])) {
            // Menyimpan session login
            $session->set([
                'id' => $admin['id'],
                'email' => $admin['email'],
                'logged_in' => true
            ]);
            // Redirect ke halaman dashboard
            return redirect()->to('/dashboard');
        } else {
            // Jika login gagal, kembali ke halaman login dengan error
            return redirect()->to('/login')->with('error', 'Email atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy(); // Menghapus session login
        return redirect()->to('/login'); // Mengarahkan ke halaman login
    }
}
