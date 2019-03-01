<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;



class Comments extends Controller
{
    
    public function index(Article $article)
    {
        return CommentResource::collection($article->comments);
    }

    public function store(CommentRequest $request, Article $article)
    {
        $comment = new Comment($request->all());
        $article->comments()->save($comment);
        return new CommentResource($comment);
    }

   
    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
