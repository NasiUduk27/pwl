<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }
    // public function articles($id)
    // {
    //     return "Halaman Artikel dengan ID $id";
    // }

    public function create(Request $request){
        return view('articles.create');
    }

    public function store(Request $request){
        $image_name = null;

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
        ]);

        return 'Artikel berhasil disimpan';
    }

    }

    

