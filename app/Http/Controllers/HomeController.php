<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // method untuk menampilkan halaman utama
    public function home()
    {
        $list_karyawan = Karyawan::all();
        return view('home',[
            'list_karyawan' => $list_karyawan

        ]);

    }
}
