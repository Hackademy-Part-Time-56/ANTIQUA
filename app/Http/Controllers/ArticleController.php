<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }
}



