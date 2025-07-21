<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }
}

