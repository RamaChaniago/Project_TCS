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

            // Redirect berdasarkan role
            if ($user->role === 'instructor') {

                return redirect('/instructor');
                Alert::success('Login Berhasil', 'Selamat Datang');

            } elseif ($user->role === 'member') {

                return redirect('/');
                Alert::success('Login Berhasil', 'Selamat Datang');

            } elseif ($user->role === 'admin') {

                return redirect('/admin');
                Alert::success('Login Berhasil', 'Selamat Datang');

            }

            // Jika role tidak dikenali, logout dan tampilkan error
            Auth::logout();
            Alert::error('Error', 'User tidak dikenali. Hubungi admin!');
            return redirect()->back();
        }

        Alert::error('Error', 'Password Anda Salah!!, Silahkan Coba Kembali');
        return redirect()->back();
    }

/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Handle an incoming authentication logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

/*******  97660065-9664-469d-a13a-70ccb1fa52e1  *******/    public function logout(Request $request)
    {
        Auth::logout(); // Logout user yang sedang aktif

        $request->session()->invalidate(); // Hapus session
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect('/'); // Redirect ke halaman login
    }


}
