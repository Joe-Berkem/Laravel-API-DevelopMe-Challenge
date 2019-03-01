<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\Http\Requests\CommentRequest;


class Comments extends Controller
{
    
    public function index(Article $article)
    {
        return $article->comments;
    }

    public function store(CommentRequest $request, Article $article)
    {
        $comment = new Comment($request->all());
        $article->comments()->save($comment);
        return $comment;
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
