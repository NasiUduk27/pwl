<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return "<h1>Halaman Produk</h1>
        
        <ol>

        <li><a href='https://www.educastudio.com/category/marbel-edu-games'>Produk 1</a></li>
        <li><a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Produk 2</a></li>
        <li><a href='https://www.educastudio.com/category/riri-story-books'>Produk 3</a></li>
        <li><a href='https://www.educastudio.com/category/kolak-kids-songs'>Produk 4</a></li>
        
        </ol>";

        
    }
}
