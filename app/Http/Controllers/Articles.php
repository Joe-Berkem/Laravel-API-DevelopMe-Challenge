<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class Articles extends Controller
{
    public function index()
    {
        return Article::all();
    }
    

     public function store(Request $request)
    {
        $data = $request->all();
        return Article::create($data);
    }

    
    public function show($id)
    {
        return Article::find($id);
    }

   
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $data = $request->all();
        $article->fill($data)->save();
        return $article;
    }

    
    public function destroy($id)
    {
        $article = Article::find($id);
        return response(null, 204);
        $article->delete();
    }
}
