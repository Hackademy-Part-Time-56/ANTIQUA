<a href="{{ route('article.show', compact('article')) }}" class="article-card-link">
    <div class="article-card">
        <div class="card-image-wrapper">
            <img src="https://picsum.photos/200" class="card-image" alt="Immagine dell'articolo {{ $article->title }}">
        </div>

        <div class="card-content">
            <div class="category-tag">
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="category-link"
                    onclick="event.stopPropagation();">
                    {{ $article->category->name }}
                </a>
            </div>

            <h4 class="card-title">
                <span class="title-link">
                    {{ $article->title }}
                </span>
            </h4>

            <div class="price-section">
                <span class="price">€ {{ number_format($article->price, 2, ',', '.') }}</span>
            </div>

            <form action="{{ route('articles.favorite', $article) }}" method="POST"
                style="position:absolute;top:10px;right:10px;">
                @csrf
                <button type="submit" class="btn-favorite">
                    @if (auth()->user() && auth()->user()->favoriteArticles->contains($article))
                        <!-- Cuore pieno (aggiunto ai preferiti) -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    @else
                        <!-- Cuore vuoto (non nei preferiti) -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                        </svg>
                    @endif
                </button>
            </form>

        </div>
    </div>
</a>
