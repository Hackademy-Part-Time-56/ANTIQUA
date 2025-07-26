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

            <div class="favorite-btn">
                <livewire:favorite-button :article="$article" :key="$article->id" />
            </div>

        </div>
    </div>
</a>
