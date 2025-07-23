<div class="article-card">
    <div class="card-image-wrapper">
        <img src="https://picsum.photos/200" class="card-image" alt="Immagine dell'articolo {{$article->title}}">
        @if($article->created_at->diffInDays(now()) < 7)
            <span class="badge-new">Nuovo</span>
        @endif
    </div>
    
    <div class="card-content">
        <div class="category-tag">
            <a href="{{ route('byCategory',['category'=>$article->category])}}" class="category-link">
                {{ $article->category->name }}
            </a>
        </div>
        
        <h4 class="card-title">
            <a href="{{ route('article.show', compact('article')) }}" class="title-link">
                {{$article->title}}
            </a>
        </h4>
        
        <div class="price-section">
            <span class="price">€ {{number_format($article->price, 2, ',', '.')}}</span>
        </div>
        
        <div class="seller-info">
            <img src="https://ui-avatars.com/api/?name={{$article->user->name}}" alt="Venditore" class="seller-avatar">
            <div class="seller-details">
                <span class="seller-name">{{$article->user->name}}</span>
            </div>
        </div>
        
        <div class="card-actions">
            <a href="{{ route('article.show', compact('article')) }}" class="btn-primary">
                Vedi dettagli
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>