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
                                <div class="box special" style="grid-area: box-1; flex-direction: column;">
                                    <span style="font-size:2.2rem; color:#ff6600; font-weight:800; line-height:1.1;">
                                        {{ __('ui.bestjewelry') }}
                                    </span>
                                    <span style="font-size:1.1rem; color:#888; font-weight:500; margin-top:0.5em;">
                                        {{ __('ui.brilliantandprecious') }}
                                    </span>
                                </div>
                                <a href="{{ route('article.search', ['query' => 'Diamanti']) }}" class="box"
                                    style="grid-area: box-2; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/diamante.jpg') }}" alt="Diamante"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.diamonds') }}</span>
                                </a>
                                <a href="{{ route('article.search', ['query' => 'Collane']) }}" class="box"
                                    style="grid-area: box-3; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/collana.webp') }}" alt="Collana"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.necklaces') }}</span>
                                </a>
                                <a href="{{ route('article.search', ['query' => 'Orecchini']) }}" class="box"
                                    style="grid-area: box-4; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/orecchini.jpg') }}" alt="Orecchini"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.earrings') }}</span>
                                </a>
                                <a href="{{ route('article.search', ['query' => 'Anelli']) }}" class="box"
                                    style="grid-area: box-5; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/anello.jpg') }}" alt="Anello"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">{{ __('ui.rings') }}</span>
                                </a>
                            </div>
                        </div>
                        <!-- Pagina 3 -->
                        <div class="carousel-item">
                            <div class="grid-container">
                                <div class="box special" style="grid-area: box-1; flex-direction: column;">
                                    <span style="font-size:2.2rem; color:#ff6600; font-weight:800; line-height:1.1;">
                                        {{ __('ui.experts') }}
                                    </span>
                                    <span style="font-size:1.1rem; color:#888; font-weight:500; margin-top:0.5em;">
                                        {{ __('ui.justforyou') }}
                                    </span>
                                </div>
                                <a href="{{ route('user.profile', 2) }}" class="box"
                                    style="grid-area: box-2; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/ldv.jpg') }}" alt="Leonardo Da Vinci"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">Leonardo Da Vinci</span>
                                </a>
                                <a href="{{ route('user.profile', 5) }}" class="box"
                                    style="grid-area: box-3; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/in.jpg') }}" alt="Isaac Newton"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;height:60px;">Isaac Newton</span>
                                </a>
                                <a href="{{ route('user.profile', 3) }}" class="box"
                                    style="grid-area: box-4; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/mc.jpg') }}" alt="Marie Curie"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">Marie Curie</span>
                                </a>
                                <a href="{{ route('user.profile', 4) }}" class="box"
                                    style="grid-area: box-5; flex-direction: column; text-decoration:none;">
                                    <img src="{{ asset('images/an.jpg') }}" alt="Albert Einstein"
                                        style="width:80px; height:80px; object-fit:cover; border-radius:12px; margin-bottom:0.5em;">
                                    <span style="color:#222; font-weight:600;">Albert Einstein</span>
                                </a>
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

    <!-- Sezione: Perché scegliere Antiqua? -->
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center mb-4">
                <h2 style="color:#ff6600; font-weight:800;">{{ __('ui.whychoose') }}</h2>
            </div>
            <div class="col-12 col-md-10">
                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <div class="p-4 rounded shadow-sm h-100" style="background:#f8fafc;">
                            <span style="font-size:2.2rem;"><svg width="64px" height="64px" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg></span>
                            <h5 class="mt-3 mb-2" style="font-weight:700;">{{ __('ui.findyourobject') }}</h5>
                            <p class="text-muted">{{ __('ui.discoverunique') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <div class="p-4 rounded shadow-sm h-100" style="background:#f8fafc;">
                            <span style="font-size:2.2rem;"><svg width="64px" height="64px" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M2 20V19C2 15.134 5.13401 12 9 12V12" stroke="#000000"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M15.8038 12.3135C16.4456 11.6088 17.5544 11.6088 18.1962 12.3135V12.3135C18.5206 12.6697 18.9868 12.8628 19.468 12.8403V12.8403C20.4201 12.7958 21.2042 13.5799 21.1597 14.532V14.532C21.1372 15.0132 21.3303 15.4794 21.6865 15.8038V15.8038C22.3912 16.4456 22.3912 17.5544 21.6865 18.1962V18.1962C21.3303 18.5206 21.1372 18.9868 21.1597 19.468V19.468C21.2042 20.4201 20.4201 21.2042 19.468 21.1597V21.1597C18.9868 21.1372 18.5206 21.3303 18.1962 21.6865V21.6865C17.5544 22.3912 16.4456 22.3912 15.8038 21.6865V21.6865C15.4794 21.3303 15.0132 21.1372 14.532 21.1597V21.1597C13.5799 21.2042 12.7958 20.4201 12.8403 19.468V19.468C12.8628 18.9868 12.6697 18.5206 12.3135 18.1962V18.1962C11.6088 17.5544 11.6088 16.4456 12.3135 15.8038V15.8038C12.6697 15.4794 12.8628 15.0132 12.8403 14.532V14.532C12.7958 13.5799 13.5799 12.7958 14.532 12.8403V12.8403C15.0132 12.8628 15.4794 12.6697 15.8038 12.3135V12.3135Z"
                                            stroke="#000000" stroke-width="1.5"></path>
                                        <path d="M15.3636 17L16.4546 18.0909L18.6364 15.9091" stroke="#000000"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M9 12C11.2091 12 13 10.2091 13 8C13 5.79086 11.2091 4 9 4C6.79086 4 5 5.79086 5 8C5 10.2091 6.79086 12 9 12Z"
                                            stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg></span>
                            <h5 class="mt-3 mb-2" style="font-weight:700;">{{ __('ui.selectedbyexperts') }}</h5>
                            <p class="text-muted">{{ __('ui.chosenandverified') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <div class="p-4 rounded shadow-sm h-100" style="background:#f8fafc;">
                            <span style="font-size:2.2rem;"><svg width="64px" height="64px" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M9 12L11 14L15 9.99999M20 12C20 16.4611 14.54 19.6937 12.6414 20.683C12.4361 20.79 12.3334 20.8435 12.191 20.8712C12.08 20.8928 11.92 20.8928 11.809 20.8712C11.6666 20.8435 11.5639 20.79 11.3586 20.683C9.45996 19.6937 4 16.4611 4 12V8.21759C4 7.41808 4 7.01833 4.13076 6.6747C4.24627 6.37113 4.43398 6.10027 4.67766 5.88552C4.9535 5.64243 5.3278 5.50207 6.0764 5.22134L11.4382 3.21067C11.6461 3.13271 11.75 3.09373 11.857 3.07827C11.9518 3.06457 12.0482 3.06457 12.143 3.07827C12.25 3.09373 12.3539 3.13271 12.5618 3.21067L17.9236 5.22134C18.6722 5.50207 19.0465 5.64243 19.3223 5.88552C19.566 6.10027 19.7537 6.37113 19.8692 6.6747C20 7.01833 20 7.41808 20 8.21759V12Z"
                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg></span>
                            <h5 class="mt-3 mb-2" style="font-weight:700;">{{ __('ui.buyerprotection') }}</h5>
                            <p class="text-muted">{{ __('ui.securepurchases') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <div class="p-4 rounded shadow-sm h-100" style="background:#f8fafc;">
                            <span style="font-size:2.2rem;"><svg fill="#000000" width="64px" height="64px"
                                    viewBox="0 -8 72 72" id="Layer_1" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>world</title>
                                        <path
                                            d="M59.25,12.42l-.83.27L54,13.08l-1.27,2-.91-.29L48.23,11.6l-.52-1.66L47,8.16l-2.23-2-2.63-.51-.06,1.2,2.58,2.52,1.26,1.48-1.42.75-1.15-.34-1.73-.73,0-1.39L39.42,8.2l-.75,3.29L36.38,12l.23,1.84,3,.57.52-2.93,2.46.37,1.14.67h1.84L46.8,15l3.34,3.38-.25,1.32-2.69-.34-4.64,2.34-3.34,4-.43,1.78H37.58l-2.23-1-2.17,1,.54,2.29.94-1.09,1.67,0-.12,2,1.38.4L39,32.67,41.2,32l2.57.4,3,.8,1.48.18,2.52,2.86,4.87,2.86-3.15,6-3.32,1.54-1.26,3.44-4.81,3.21-.51,1.85A28,28,0,0,0,59.25,12.42Z">
                                        </path>
                                        <path
                                            d="M39.22,42.63l-2-3.78L39.05,35l-1.87-.56-2.1-2.11-4.66-1L28.88,28v1.92H28.2l-4-5.44V20l-2.94-4.78-4.67.83H13.43l-1.59-1,2-1.6-2,.46A28,28,0,0,0,36,56a29,29,0,0,0,3.51-.25l-.29-3.39s1.29-5,1.29-5.2S39.22,42.63,39.22,42.63Z">
                                        </path>
                                        <path
                                            d="M18.41,9l5-.7,2.29-1.25,2.58.74,4.12-.23,1.42-2.22,2.05.34,5-.47,1.38-1.52,2-1.29,2.74.41,1-.15a27.91,27.91,0,0,0-33.51,7.49h0ZM37.18,2.78,40,1.21l1.84,1.06-2.66,2-2.54.26-1.14-.74ZM28.71,3,30,3.54,31.63,3l.9,1.56-3.82,1L26.88,4.5S28.67,3.35,28.71,3Z">
                                        </path>
                                    </g>
                                </svg></span>
                            <h5 class="mt-3 mb-2" style="font-weight:700;">{{ __('ui.chosenbymillions') }}</h5>
                            <p class="text-muted">{{ __('ui.communityofenthusiasts') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fine sezione Antiqua -->

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