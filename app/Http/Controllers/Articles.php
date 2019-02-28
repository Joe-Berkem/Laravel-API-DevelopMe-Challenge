<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticleListResource;



class Articles extends Controller
{
    public function index()
    {
        return ArticleListResource::collection(Article::all());
    }
    

     public function store(Request $request)
    {
        $data = $request->all();
        $article = Article::create($data);
        return new ArticleResource($article);
    }

    
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

   
    public function update(Request $request, Article $article)
    {
        $data = $request->all();
        $article->fill($data)->save();
        return new ArticleResource($article);
    }

    
    public function destroy(Article $article)
    {
        $article->delete();
        return response(null, 204);
    }
}
