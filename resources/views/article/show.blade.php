<x-layout>
    <div class="article-detail-page">
        <!-- Breadcrumb -->
        <div class="container">
            <nav aria-label="breadcrumb" class="pt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Articoli</a></li>
                    <li class="breadcrumb-item"><a
                            href="{{ route('byCategory', ['category' => $article->category]) }}">{{ $article->category->name }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($article->title, 30) }}</li>
                </ol>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="container py-4">
            <div class="row">
                <!-- Gallery Section -->
                <div class="col-12 col-lg-7 mb-4">
                    <div class="product-gallery">
                        <div id="productCarousel" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/600/500" class="d-block w-100 main-image"
                                        alt="{{ $article->title }}">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/601/500" class="d-block w-100 main-image"
                                        alt="{{ $article->title }}">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/602/500" class="d-block w-100 main-image"
                                        alt="{{ $article->title }}">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Info Section -->
                <div class="col-12 col-lg-5">
                    <div class="product-info">
                        <span class="category-badge">{{ $article->category->name }}</span>
                        <h1 class="product-title">{{ $article->title }}</h1>

                        <div class="price-section">
                            <span class="price-label">{{ __('ui.price:') }}</span>
                            <span class="price-value">€ {{ number_format($article->price, 2, ',', '.') }}</span>
                            @if($article->estimated_price)
                                <p><strong>Stima revisore:</strong> €
                                    {{ number_format($article->estimated_price, 2, ',', '.') }}
                                </p>
                            @endif
                        </div>

                        <div class="seller-card">
                            <div class="seller-info">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($article->user->name) }}"
                                    alt="Venditore" class="seller-avatar">
                                <div>
                                    <h6 class="mb-0">
                                        {{ $article->user->name }}
                                        @if($article->user->hasVerifiedEmail())
                                            <span class="badge bg-success ms-2" title="Utente verificato">
                                                <i class="fas fa-check-circle"></i> Verificato
                                            </span>
                                        @else
                                            <span class="badge bg-secondary ms-2" title="Utente non verificato">
                                                <i class="fas fa-times-circle"></i> Non verificato
                                            </span>
                                        @endif
                                    </h6>
                                    <p class="text-muted mb-0">{{ $article->user->email }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="action-buttons">
                            <button class="btn btn-primary btn-lg w-100 mb-2">
                                Acquista ora
                            </button>
                            <button class="btn btn-outline-primary w-100">
                                Contatta il venditore
                            </button>
                        </div>

                        <div class="product-features">
                            <div class="feature-item">
                                <i class="bi bi-shield-check text-success"></i>
                                <span>Garanzia acquirente</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-truck text-success"></i>
                                <span>Spedizione assicurata</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="description-section">
                        <h3 class="mb-3">{{ __('ui.description:') }}</h3>
                        <p>{{ $article->description }}</p>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Categoria:</strong> {{ $article->category->name }}</p>
                                <p><strong>Pubblicato il:</strong> {{ $article->created_at->format('d/m/Y') }}</p>
                            </div>
                            <div class="col-md-6">
                                <!-- <p><strong>ID Articolo:</strong> #{{ $article->id }}</p> -->
                                <!-- <p><strong>Visualizzazioni:</strong> 125</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>