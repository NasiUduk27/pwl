<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return "<h1>Selamat datang di halaman News</h1>
        
        <ol>
        <li><a href='https://www.educastudio.com/news'>Program 1</a></li>
        <li><a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>Program 1</a></li>
        </ol>
        ";
    }

    public function show($id)
    {
        echo "<h1>Artikel $id</h1>";
    }
}
