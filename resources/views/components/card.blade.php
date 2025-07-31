<a href="{{ route('article.show', compact('article')) }}" class="article-card-link">
    <div class="article-card">
        <div class="card-image-wrapper">
            <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(750, 500) : 'https://picsum.photos/600/500' }}" class="card-image" alt="Test">
        </div>
        <div class="card-content">
            <div class="category-tag">
                @if($article->category)
                    <a href="{{ route('byCategory', ['category' => $article->category->id]) }}" class="category-link"
                        onclick="event.stopPropagation();">
                        {{ __("ui." . $article->category->name) }}
                    </a>
                @else
                    <span class="category-link text-muted">{{ __('ui.no_category') }}</span>
                @endif
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