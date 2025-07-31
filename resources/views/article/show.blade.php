<x-layout>
    <div class="article-detail-page">
        <!-- Go Back Button -->
        <div class="container mt-3 d-flex justify-content-center p-5 d-md-none">
            <a href="javascript:history.back()" class="btn customcolor customoutline">
                <i class="fas fa-arrow-left"></i> {{ __('ui.back') }}
            </a>

        </div>


        <!-- Main Content -->
        <div class="container py-4">
            <div class="row">
                <!-- Gallery Section -->
                <div class="col-12 col-lg-7 mb-4">
                    <div class="product-gallery">
                        @if($article->images->count() > 0)
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($article->images as $key => $image)
                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <img src="{{ $image->getUrl(550, 500) }}" class="d-block w-100 rounded shadow main-image"
                                                alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                                        </div>
                                    @endforeach
                                </div>
                                @if($article->images->count() > 1)
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                @endif
                            </div>
                        @else
                            <img src="https://picsum.photos/600/500" class="d-block w-100 rounded shadow main-image" alt="Nessuna foto inserita dall'utente">
                        @endif
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
                                        <a class="text-decoration-none"
                                            href="{{ route('user.profile', $article->user) }}">{{ $article->user->name }}</a>

                                        @if($article->user->hasVerifiedEmail())
                                            <span class="badge bg-success ms-2" title="Utente verificato">
                                                <i class="fas fa-check-circle"></i> {{ __('ui.verif') }}
                                            </span>
                                        @else
                                            <span class="badge bg-secondary ms-2" title="Utente non verificato">
                                                <i class="fas fa-times-circle"></i> {{ __('ui.notverif') }}
                                            </span>
                                        @endif
                                    </h6>
                                    <p class="text-muted mb-0">{{ $article->user->email }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="action-buttons">
                            <button class="btn btn-primary btn-lg w-100 mb-2">
                                {{ __('ui.buynow') }}
                            </button>
                            <button class="btn btn-outline-primary w-100">
                                {{ __('ui.contactseller') }}
                            </button>
                        </div>

                        <div class="product-features">
                            <div class="feature-item">
                                <i class="bi bi-shield-check text-success"></i>
                                <span>{{ __('ui.buyerguarantee') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-truck text-success"></i>
                                <span>{{ __('ui.insuredship') }}</span>
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
                                <p><strong>{{ __('ui.category') }}</strong> {{ $article->category->name }}</p>
                                <p><strong>{{ __('ui.published') }}</strong> {{ $article->created_at->format('d/m/Y') }}
                                </p>
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