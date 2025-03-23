<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\contactUs;
use Illuminate\Http\Request;

class contactUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ],[
            'name.required' => 'Data Wajib diisi',
            'email.required' => 'Data Wajib diisi',
            'phone.required' => 'Data Wajib diisi',
            'message.required' => 'Data Wajib diisi',
        ]);
        

        contactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'message' => $request->message,
        ]);

        // echo 'Success Save!!!';

        // Alert::success('Success', 'Pesan Anda sudah kami terima, Terima Kasih atas saran dan masukkannya.');
        toast('Pesan Terkirim','success');
        return redirect('/contact');

    }
}
