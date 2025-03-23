<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class screenController extends Controller
{
    function home(){

        return view('website.screen.home');
    }

    function service(){

        return view('website.screen.service');
    }

    function blog(){

        return view('website.screen.blog');
    }
    function sertifikasi(){

        return view('404');
    }

    function contact(){

        return view('website.screen.contact');
    }
}
