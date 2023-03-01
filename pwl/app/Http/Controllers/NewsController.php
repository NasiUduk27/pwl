<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($news){
        return view('news', [
            'title' => $news,
            
        ]);
    }

    public function show($id)
    {
        return view('news', [
            'title' => $id
            
        ]);
    }   
}
