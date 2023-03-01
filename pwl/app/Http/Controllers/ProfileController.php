<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile',[
            'nama' => 'Dhoriffito Diansyah Putra',
            'kelas' => 'TI-2A',
            'nim' => '2141720201',
            'absen' => '09'
        ]);
    }
}
