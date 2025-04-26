<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class authController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ], [
            'required' => 'Harap mengisi bidang ini!',
            'email' => 'Harap sesuaikan format @gmail.com',
            'exists' => 'Maaf Email Tidak Terdaftar',
            'min' => 'Harap mengisi dengan minimal 8 karakter',
        ]);

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            // Check if there's a redirect_to parameter
            $redirectTo = $request->input('redirect_to');

            if ($redirectTo) {
                // If there's a redirect URL, use it with a success parameter
                return redirect($redirectTo . '?login_success=Successfully logged in');
            }

            // Default redirects based on role if no redirect_to is specified
            if ($user->role === 'instructor') {
                Alert::success('Login Berhasil', 'Selamat Datang');
                return redirect('/instructor');
            } elseif ($user->role === 'member') {
                Alert::success('Login Berhasil', 'Selamat Datang');
                return redirect('/');
            } elseif ($user->role === 'admin') {
                Alert::success('Login Berhasil', 'Selamat Datang');
                return redirect('/admin');
            }

            // Jika role tidak dikenali, logout dan tampilkan error
            Auth::logout();
            Alert::error('Error', 'User tidak dikenali. Hubungi admin!');
            return redirect()->back();
        }

        // If the login fails and there's a redirect_to parameter
        if ($request->has('redirect_to')) {
            return redirect($request->input('redirect_to') . '?login_error=Password Anda Salah! Silahkan Coba Kembali');
        }

        Alert::error('Error', 'Password Anda Salah!!, Silahkan Coba Kembali');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout user yang sedang aktif

        $request->session()->invalidate(); // Hapus session
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect('/'); // Redirect ke halaman login
    }
}
