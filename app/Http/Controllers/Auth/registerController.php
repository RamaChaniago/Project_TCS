<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class registerController extends Controller
{
    public function store(Request $request)
    {
        $validateRequest = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|confirmed',
            // 'role' => 'required',
        ],[
            'required' => 'Harap mengisi bidang ini!',
            'email' => 'Harap sesuaikan format @gmail.com',
            'unique' => 'Maaf Email sudah terdaftar!',
            'numeric' => 'silahkan memasukkan nomor dengan format 08..',
            'min' => 'Harap mengisi dengan minimal 8 karakter',
        ]);

        $validateRequest['role'] = 'member';
        $validateRequest['password'] = Hash::make($request->password);

        User::create($validateRequest);

        Alert::success('Success', 'Thank Your Dear, Your Register Account Success');

        return redirect('/login');

    }
}
