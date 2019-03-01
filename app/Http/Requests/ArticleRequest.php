<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => ["required", "string", "max:100"],
            "article" => ["required", "string", "min:50"],
            "tags" => ["required", "array"],
            "tags.*" => ["string", "max:30"],
        ];
    }
}
