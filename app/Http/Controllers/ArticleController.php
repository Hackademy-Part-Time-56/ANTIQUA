<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }
    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(10);
        return view('article.index', compact('articles'));
    }
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles', 'category'));
    }

    public function toggleFavorite(Request $request, Article $article)
    {
        $user = $request->user();

        if ($user->favoriteArticles()->where('article_id', $article->id)->exists()) {
            $user->favoriteArticles()->detach($article->id);
            return back()->with('message', 'Articolo rimosso dai preferiti');
        } else {
            $user->favoriteArticles()->attach($article->id);
            return back()->with('message', 'Articolo aggiunto ai preferiti');
        }
    }

    public function favorites(Request $request, Article $article)
    {
        $user = $request->user();
        $articles = $user->favoriteArticles()->where('is_accepted', true)->get();
        return view('article.favorites', compact('articles'));
    }
}
