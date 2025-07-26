<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FavoriteButton extends Component
{
    public Article $article;
    public $isFavorite = false;

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->isFavorite = Auth::user() && Auth::user()->favoriteArticles->contains($article);
    }

    public function toggleFavorite()
    {
        $user = Auth::user();
        if (!$user) return;

        if ($user->favoriteArticles->contains($this->article)) {
            $user->favoriteArticles()->detach($this->article->id);
            $this->isFavorite = false;
        } else {
            $user->favoriteArticles()->attach($this->article->id);
            $this->isFavorite = true;
        }
    }

    public function render()
    {
        return view('livewire.favorite-button');
    }
}