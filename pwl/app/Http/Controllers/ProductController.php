<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
         
        return view('product', [

            'title' => 'Marbel Edu Games',
            'product' => ['Chess', 'Math', 'English', 'Coding']
        ]);
    }

    public function Chess() {
        return view('product', [

            'title' => 'Chess',
            'product' => ['Chess', 'Math', 'English', 'Coding']
        ]);
    }

    public function Math() {
        return view('product', [

            'title' => 'Math',
            'product' => ['Chess', 'Math', 'English', 'Coding']
        ]);
    }

    public function English() {
        return view('product', [

            'title' => 'English',
            'product' => ['Chess', 'Math', 'English', 'Coding']
        ]);
    }

    public function Coding() {
        return view('product', [

            'title' => 'Coding',
            'product' => ['Chess', 'Math', 'English', 'Coding']
        ]);
    }
}
