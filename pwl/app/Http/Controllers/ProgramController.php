<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        return "<h1>Halaman Program</h1>
        
        <ol>

        <li><a href='https://www.educastudio.com/program/karir'>Program 1</a></li>
        <li><a href='https://www.educastudio.com/program/magang'>Program 2</a></li>
        <li><a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a></li>
        
        </ol>";

        
    }
}
