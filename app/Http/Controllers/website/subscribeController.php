<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\newslaterSubscribe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class subscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subscribe' => 'required'
        ]);

        $save = new newslaterSubscribe();
        $save->email = $request->subscribe;
        $save->save();

        Alert::success('Success','Berita-berita terbaru akan kami kirimkan kepada Anda.');
        return redirect()->back();

    }
}
