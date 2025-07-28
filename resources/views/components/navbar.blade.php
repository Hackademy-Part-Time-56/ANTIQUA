<nav class="navbar-modern navbar navbar-expand-lg bg-body-tertiary">
    <div class="navbar-container">
        <!-- Logo Section -->
        <div class="navbar-brand-section">
            <a class="navbar-logo" href="{{ route('homepage') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Antiqua Logo">
            </a>
        </div>

        <!-- Searchbar -->
        <form class="d-flex ms-auto mt-3 mobile-center-search" role="search" action="{{ route('article.search') }}"
            method="GET">
            <div class="position-relative w-100 custom-search-container">
                <button type="submit" class="btn custom-search-button"
                    style="position: absolute; left: 0; top: 50%; transform: translateY(-50%); z-index: 2; border: none; background: transparent;"
                    aria-label="Cerca">
                    <!-- Icona SVG di ricerca (da Bootstrap Icons) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search text-secondary" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
                <input type="search" name="query" class="form-control custom-search-input search-input"
                    placeholder="{{ __('ui.searcharticles...') }}" aria-label="Cerca" style="padding-left: 2.5rem;">
            </div>
        </form>


        <!-- Navigation Actions -->
        <div class="navbar-actions">
            <a href="{{ route('create.article') }}" class="btn-sell">
                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 32 32">
                    <g fill="none" fill-rule="evenodd">
                        <path d="m0 0h32v32h-32z" />
                        <path
                            d="m16 0c8.836556 0 16 7.163444 16 16s-7.163444 16-16 16-16-7.163444-16-16 7.163444-16 16-16zm0 2c-7.7319865 0-14 6.2680135-14 14s6.2680135 14 14 14 14-6.2680135 14-14-6.2680135-14-14-14zm.0715729 7.25735931 7.0710678 7.07106779-1.4142136 1.4142136-4.6857864-4.6862814v10.4436407h-2v-10.4276407l-4.6710678 4.6702814-1.41421359-1.4142136 7.07106779-7.07106779.0222136.021z"
                            fill="#ffffffff" fill-rule="nonzero" />
                    </g>
                </svg>
                {{ __('ui.sell') }}
            </a>
            @guest
                <a href="{{ route('login') }}" class="nav-action-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ __('ui.login') }}</span>
                </a>
                <a href="{{ route('register') }}" class="nav-action-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>{{ __('ui.register') }}</span>
                </a>
            @else
            <div class="user-menu">
                <button class="user-menu-trigger">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="Avatar"
                        class="user-avatar">
                    <span class="user-name">{{ Auth::user()->name }}</span>
                    <svg class="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="user-dropdown">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-link"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        {{ __('ui.exit') }}
                    </a>
                    <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">@csrf</form>
                    @auth
                        @if (Auth::user()->is_revisor)
                            <a class="nav-link btn dropdown-link btn-sm position-relative w-sm-25"
                                href="{{ route('revisor.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard-teacher">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" />
                                    <path d="M12 14a2 2 0 1 0 4.001 -.001a2 2 0 0 0 -4.001 .001" />
                                    <path d="M17 19a2 2 0 0 0 -2 -2h-2a2 2 0 0 0 -2 2" />
                                </svg>{{ __('ui.revisorZone') }}
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}
                                </span>
                            </a>
                        @endif
                    @endauth
                    <a class="dropdown-link" href="{{ route('user.profile', auth()->user()) }}">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g clip-path="url(#clip0_15_82)">
                                    <rect width="24" height="24" fill="white"></rect>
                                    <g filter="url(#filter0_d_15_82)">
                                        <path
                                            d="M14.3365 12.3466L14.0765 11.9195C13.9082 12.022 13.8158 12.2137 13.8405 12.4092C13.8651 12.6046 14.0022 12.7674 14.1907 12.8249L14.3365 12.3466ZM9.6634 12.3466L9.80923 12.8249C9.99769 12.7674 10.1348 12.6046 10.1595 12.4092C10.1841 12.2137 10.0917 12.022 9.92339 11.9195L9.6634 12.3466ZM4.06161 19.002L3.56544 18.9402L4.06161 19.002ZM19.9383 19.002L20.4345 18.9402L19.9383 19.002ZM16 8.5C16 9.94799 15.2309 11.2168 14.0765 11.9195L14.5965 12.7737C16.0365 11.8971 17 10.3113 17 8.5H16ZM12 4.5C14.2091 4.5 16 6.29086 16 8.5H17C17 5.73858 14.7614 3.5 12 3.5V4.5ZM7.99996 8.5C7.99996 6.29086 9.79082 4.5 12 4.5V3.5C9.23854 3.5 6.99996 5.73858 6.99996 8.5H7.99996ZM9.92339 11.9195C8.76904 11.2168 7.99996 9.948 7.99996 8.5H6.99996C6.99996 10.3113 7.96342 11.8971 9.40342 12.7737L9.92339 11.9195ZM9.51758 11.8683C6.36083 12.8309 3.98356 15.5804 3.56544 18.9402L4.55778 19.0637C4.92638 16.1018 7.02381 13.6742 9.80923 12.8249L9.51758 11.8683ZM3.56544 18.9402C3.45493 19.8282 4.19055 20.5 4.99996 20.5V19.5C4.70481 19.5 4.53188 19.2719 4.55778 19.0637L3.56544 18.9402ZM4.99996 20.5H19V19.5H4.99996V20.5ZM19 20.5C19.8094 20.5 20.545 19.8282 20.4345 18.9402L19.4421 19.0637C19.468 19.2719 19.2951 19.5 19 19.5V20.5ZM20.4345 18.9402C20.0164 15.5804 17.6391 12.8309 14.4823 11.8683L14.1907 12.8249C16.9761 13.6742 19.0735 16.1018 19.4421 19.0637L20.4345 18.9402Z"
                                            fill="#000000"></path>
                                    </g>
                                </g>
                                <defs>
                                    <filter id="filter0_d_15_82" x="2.55444" y="3.5" width="18.8911" height="19"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                        </feColorMatrix>
                                        <feOffset dy="1"></feOffset>
                                        <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                                        </feColorMatrix>
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_15_82"></feBlend>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_15_82"
                                            result="shape"></feBlend>
                                    </filter>
                                    <clipPath id="clip0_15_82">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </g>
                        </svg>
                        {{ __('ui.profile') }}
                    </a>
                </div>
            </div>
            @endauth
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center" type="button"
                    id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('vendor/blade-flags/language-' . app()->getLocale() . '.svg') }}" width="24"
                        height="24" class="me-2" />
                    {{ strtoupper(app()->getLocale()) }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    <li>
                        <form class="d-inline" action="{{ route('setLocale', 'it') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('vendor/blade-flags/language-it.svg') }}" width="24" height="24"
                                    class="me-2" />
                                IT
                            </button>
                        </form>
                    </li>
                    <li>
                        <form class="d-inline" action="{{ route('setLocale', 'es') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('vendor/blade-flags/language-es.svg') }}" width="24" height="24"
                                    class="me-2" />
                                ES
                            </button>
                        </form>
                    </li>
                    <li>
                        <form class="d-inline" action="{{ route('setLocale', 'en') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('vendor/blade-flags/language-en.svg') }}" width="24" height="24"
                                    class="me-2" />
                                EN
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div>
                <a class="nav-link" href="{{ route('articles.favorites') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-1"
                        viewBox="0 0 24 24">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                    </svg>
                </a>
            </div>
        </div>



        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" hidden>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Secondary Navigation -->
    <!-- <div class="navbar-secondary">
        <div class="navbar-containertwo">
            <nav class="secondary-nav">
                <a href="{{ route('homepage') }}"
                    class="secondary-link {{ request()->routeIs('homepage') ? 'active' : '' }}">Home</a>
                <a href="{{ route('article.index') }}"
                    class="secondary-link {{ request()->routeIs('article.index') ? 'active' : '' }}">Tutti gli
                    articoli</a>

                <div class="category-dropdown">
                    <button class="secondary-link category-trigger">
                        Categorie
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="category-mega-menu">
                        <div class="mega-menu-grid">
                            @foreach ($categories as $category)
<a href="{{ route('byCategory', ['category' => $category]) }}" class="category-item">
                                    <div class="category-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                        </svg>
                                    </div>
                                    <span>{{ $category->name }}</span>
                                </a>
@endforeach
                        </div>
                    </div>
                </div>
                -->

</nav>