<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Dhoriffito',
            'email' => 'admim123@gmail.com',
        ]);

    }
}
