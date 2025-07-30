<x-layout>
    <x-category-navigation />
    <div class="container-fluid text-center">

        <!-- Test Carousel grid system -->
        <style>
            .box {
                opacity: 0;
                transform: translateY(-40px);
                transition: opacity 0.6s, transform 0.6s;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
                font-weight: 500;
                border-radius: 18px;
                box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
                background: #f8fafc;
                color: #222;
                padding: 1.5em;
                text-align: center;
            }

            .box.special {
                font-size: 1.5rem;
                font-weight: 700;
                letter-spacing: 1px;
                border: 2px solid #fff;
                box-shadow: 0 8px 32px rgba(79, 140, 255, 0.15);
                text-shadow: 0 2px 8px rgba(79, 140, 255, 0.15);
            }

            .box.slide-down {
                opacity: 1;
                transform: translateY(0);
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
                        "box-1 box-1"
                        "box-2 box-3"
                        "box-4 box-5";
                }
            }

            .custom-indicators {
                display: flex;
                justify-content: center;
                gap: 12px;
                margin-top: 2em !important;
            }

            .indicator-btn {
                width: 48px !important;
                height: 7px !important;
                border-radius: 4px !important;
                background: transparent !important;
                border: 2px solid #ff6600 !important;
            }

            .carousel-indicators {
                bottom: -30px;
            }

            .indicator-btn.active,
            .indicator-btn:focus {
                background: #ff6600 !important;
            }
        </style>
        <div class="container my-5">
            <div id="gridCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="carousel-inner" style="max-width:900px;">
                        <!-- Pagina 1 -->
                        <div class="carousel-item active">
                            <div class="grid-container">
                                <div class="box special" style="grid-area: box-1; flex-direction: column;">
                                    <span style="font-size:2.2rem; color:#ff6600; font-weight:800; line-height:1.1;">
                                        {{ __('ui.specit') }}
                                    </span>
                                    <span style="font-size:1.1rem; color:#888; font-weight:500; margin-top:0.5em;">
                                        {{ __('ui.selctbyex') }}
                                    </span>
                                </div>
                                <a href="{{ route('byCategory', ['category' => 'arte']) }}" class="box"
                                    style="grid-area: box-2; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/arte.webp') }}" alt="Arte"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.arte') }}</span>
                                </a>
                                <a href="{{ route('byCategory', ['category' => '18']) }}" class="box"
                                    style="grid-area: box-3; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/orologi.jpg') }}" alt="Orologi"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.orologi') }}</span>
                                </a>
                                <a href="{{ route('byCategory', ['category' => 'monete']) }}" class="box"
                                    style="grid-area: box-4; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/monete.jpg') }}" alt="Monete"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.monete') }}</span>
                                </a>
                                <a href="{{ route('byCategory', ['category' => 'liquori']) }}" class="box"
                                    style="grid-area: box-5; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/liquori.jpg') }}" alt="Liquori"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.liquori') }}</span>
                                </a>
                            </div>
                        </div>
                        <!-- Pagina 2 -->
                        <div class="carousel-item">
                            <div class="grid-container">
                                <div class="box" style="grid-area: box-1">1B</div>
                                <div class="box" style="grid-area: box-2">2B</div>
                                <div class="box" style="grid-area: box-3">3B</div>
                                <div class="box" style="grid-area: box-4">4B</div>
                                <div class="box" style="grid-area: box-5">5B</div>
                            </div>
                        </div>
                        <!-- Pagina 3 -->
                        <div class="carousel-item">
                            <div class="grid-container">
                                <div class="box" style="grid-area: box-1">1C</div>
                                <div class="box" style="grid-area: box-2">2C</div>
                                <div class="box" style="grid-area: box-3">3C</div>
                                <div class="box" style="grid-area: box-4">4C</div>
                                <div class="box" style="grid-area: box-5">5C</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-indicators custom-indicators mb-3">
                    <button type="button" data-bs-target="#gridCarousel" data-bs-slide-to="0"
                        class="indicator-btn active" aria-current="true"></button>
                    <button type="button" data-bs-target="#gridCarousel" data-bs-slide-to="1"
                        class="indicator-btn"></button>
                    <button type="button" data-bs-target="#gridCarousel" data-bs-slide-to="2"
                        class="indicator-btn"></button>
                </div>
            </div>
        </div>

    </div>

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

</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.getElementById('gridCarousel');

        function animateActiveBoxes() {
            // Rimuovi slide-down da tutte le box di tutte le slide
            var allBoxes = carousel.querySelectorAll('.box');
            allBoxes.forEach(function (box) {
                box.classList.remove('slide-down');
            });

            // Aggiungi slide-down solo alle box della slide attiva
            var activeItem = carousel.querySelector('.carousel-item.active');
            var boxes = activeItem.querySelectorAll('.box');
            boxes.forEach(function (box, i) {
                setTimeout(function () {
                    box.classList.add('slide-down');
                }, 100 + i * 80);
            });
        }

        // Animazione iniziale
        animateActiveBoxes();

        // Animazione ad ogni cambio slide
        carousel.addEventListener('slid.bs.carousel', animateActiveBoxes);
    });
</script>

<style>
    .views-badge-overlay {
        position: absolute;
        top: 14px;
        left: 18px;
        background: #ff6600;
        color: #fff;
        padding: 6px 16px;
        border-radius: 18px;
        font-size: 1em;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
        display: flex;
        align-items: center;
        gap: 7px;
        z-index: 1;
        pointer-events: none;
    }

    .views-badge-overlay i {
        font-size: 1.1em;
    }

    .popular-article-wrapper {
        position: relative;
    }
</style>