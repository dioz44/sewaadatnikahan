<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //    'nama' => 'Doraemon',
        //    'pekerjaan' => 'Developer',
        // ];
        // return  view('home')->with($data);

        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        $data = [
            'nama' => 'Sizuka',
            'telepon' => '085587671107',
        ];
        return view('contact')->with($data);
    }
}
