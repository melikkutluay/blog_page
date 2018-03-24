<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index()
    {

        $deneme = "dasdasdasd";

        return view('iletisim', compact('deneme'));

    }

    public function mail(Request $request)
    {
            echo 'hello iletişim mail';
    }
}
