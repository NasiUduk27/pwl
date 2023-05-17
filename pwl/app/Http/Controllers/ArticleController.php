<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request, $id){
        $articles = Article::find($id);

        $articles->title = $request->title;
        $articles->content = $request->content;

        if ($articles->featured_image && file_exists(storage_path('app/public/' . $articles->featured_image))) {
            \Storage::delete('public/' . $articles->featured_image);
        }

        $image_name = $request->file('image')->store('images', 'public');
        $articles->featured_image = $image_name;

        $articles->save();
        return 'Artikel berhasil diubah';
    }

    public function edit($id){
        $articles = Article::find($id);

        return view('articles.edit', ['articles' => $articles]);

    }
    

}