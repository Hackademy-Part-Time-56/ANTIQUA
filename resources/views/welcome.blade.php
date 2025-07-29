<x-layout>
    <x-category-navigation />
    <div class="container-fluid text-center">

        <!-- Carousel con articoli in evidenza -->
        @if ($featuredArticles->count() > 0)
            <section class="py-4">
                <div class="container">
                    <h3 class="text-center mb-4">{{ __('ui.featuredarticles') }}</h3>
                    <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($featuredArticles as $index => $article)
                                <button type="button" data-bs-target="#featuredCarousel"
                                    data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                    aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>

                        <div class="carousel-inner">
                            @foreach ($featuredArticles as $index => $article)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="position-relative">
                                        <img src="https://picsum.photos/800/400?random={{ $article->id }}"
                                            class="d-block w-100 carousel-image" alt="{{ $article->title }}">
                                        <div class="carousel-caption-custom">
                                            <div class="carousel-content">
                                                <h4 class="fw-bold mb-2">{{ $article->title }}</h4>
                                                <p class="mb-3">{{ Str::limit($article->body, 120) }}</p>
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span
                                                        class="price-tag">€{{ number_format($article->price, 2) }}</span>
                                                    <span
                                                        class="category-tag">{{ $article->category->name ?? 'N/A' }}</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-light">
                                                        {{ $article->user->name ?? 'Anonymous' }} •
                                                        {{ $article->created_at->diffForHumans() }}
                                                    </small>
                                                    <a href="{{ route('article.show', $article) }}"
                                                        class="btn btn-light btn-sm">
                                                        {{ __('ui.viewdetails') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
        @endif

        <!-- Marquee con le card degli articoli -->
        <div class="marquee my-5">
            <div class="marquee_header">{{ __('ui.latestarticles') }}</div>
            <div class="marquee__inner">
                <div class="marquee__group">
                    @foreach ($articles as $article)
                        <div style="min-width:250px;">
                            <x-card :article="$article" />
                        </div>
                    @endforeach
                </div>
                <div class="marquee__group">
                    @foreach ($articles as $article)
                        <div style="min-width:250px;">
                            <x-card :article="$article" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Fine marquee -->

        @auth
            <div class="publish-section">
                <div class="container">
                    <div class="publish-banner">
                        <div class="banner-content">
                            <h3 class="banner-title">{{ __('ui.startselling') }}</h3>
                            <p class="banner-subtitle">{{ __('ui.reachmillionsofinterestedbuyers') }}</p>
                        </div>
                        <a href="{{ route('create.article') }}" class="publish-button">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span>{{ __('ui.postanad') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        @endauth

        <!-- Articoli Popolari -->
        <div class="container my-5">
            <h3 class="text-center mb-4">{{ __('ui.populararticles') }}</h3>
            <div class="row justify-content-center">
                @forelse ($popularArticles as $article)
                    <div class="col-12 col-md-4 col-lg-3 mb-4 popular-article-wrapper">
                        <x-card :article="$article" />
                        <div class="views-badge-overlay">
                            <i class="fas fa-eye"></i> {{ $article->views ?? 0 }}
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <h5 class="text-muted">{{ __('ui.noarticleshavebeencreatedyet') }}</h5>
                            <p class="text-muted">{{ __('ui.betheFirsttopublish') }}</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Test Carousel grid system -->
        <style>
            .box {
                background-color: blue;
            }

            .grid-container {
                display: grid;
                grid-auto-columns: 200px;
                grid-auto-rows: 200px;
                gap: 1em;
                grid-template-areas:
                    "box-1 box-1 box-2 box-3"
                    "box-1 box-1 box-4 box-5";
            }

            @media (max-width: 56em) {
                .grid-container {
                    grid-template-areas:
                        "box-1 box-1 box-2"
                        "box-1 box-1 box-3"
                        "box-4 box-5 box-5";
                }
            }
            @media (max-width: 40em) {
                .grid-container {
                    grid-template-areas:
                        "box-1 box-2"
                        "box-3 box-4"
                        "box-5 box-5";
                }
            }
        </style>
        <div class="container">
            <div class="grid-container">
                <div class="box" style="grid-area: box-1"></div>
                <div class="box" style="grid-area: box-2"></div>
                <div class="box" style="grid-area: box-3"></div>
                <div class="box" style="grid-area: box-4"></div>
                <div class="box" style="grid-area: box-5"></div>
            </div>
        </div>

    </div>
</x-layout>
