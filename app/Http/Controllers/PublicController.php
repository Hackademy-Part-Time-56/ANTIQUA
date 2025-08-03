<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PublicController extends Controller
{
    public function homepage()
    {
        // Articoli recenti per il marquee e la griglia principale (aumentato a 12 per avere più contenuti)
        $articles = Article::where('is_accepted', true)
            ->with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->take(12)
            ->get();

        // Articoli in evidenza per il carousel (usando il campo 'featured' esistente)
        $featuredArticles = Article::where('is_accepted', true)
            ->where('featured', true)
            ->with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        // Se non ci sono articoli featured, prendi quelli più recenti
        if ($featuredArticles->count() < 6) {
            $additionalArticles = Article::where('is_accepted', true)
                ->with(['category', 'user'])
                ->orderBy('created_at', 'desc')
                ->take(6 - $featuredArticles->count())
                ->get();

            $featuredArticles = $featuredArticles->merge($additionalArticles);
        }

        $popularArticles = Article::where('is_accepted', true)
            ->with(['category', 'user'])
            ->orderBy('views', 'desc')
            ->orderBy('created_at', 'desc') // Fallback per articoli con views uguali
            ->take(8)
            ->get();

        return view('welcome', compact(
            'articles',
            'featuredArticles',
            'popularArticles',
        ));
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function chiSiamo() { return view('pages.chi-siamo'); }
    public function lavoraConNoi() { return view('pages.lavora-con-noi'); }
    public function stampa() { return view('pages.stampa'); }
    public function contatti() { return view('pages.contatti'); }

    public function centroAssistenza() { return view('pages.centro-assistenza'); }
    public function comeFunziona() { return view('pages.come-funziona'); }
    public function spedizione() { return view('pages.spedizione'); }
    public function pagamenti() { return view('pages.pagamenti'); }
    public function sicurezza() { return view('pages.sicurezza'); }

    public function terminiCondizioni() { return view('pages.termini-condizioni'); }
    public function privacy() { return view('pages.informativa-privacy'); }
    public function cookie() { return view('pages.politica-cookie'); }
    public function noteLegali() { return view('pages.note-legali'); }

    public function categoriePopolari() { return view('pages.categorie-popolari'); }
    public function asteInCorso() { return view('pages.aste-in-corso'); }
    public function appMobili() { return view('pages.app-mobili'); }
    public function blog() { return view('pages.blog'); }
}