<nav class="navbar-modern navbar navbar-expand-lg bg-body-tertiary">
    <div class="navbar-container">
        <!-- Logo Section -->
        <div class="navbar-brand-section">
            <a class="navbar-logo" href="{{ route('homepage') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Antiqua Logo">
            </a>
        </div>

        <!-- Searchbar -->
        <form class="d-flex ms-auto mt-3" role="search" action="{{ route('article.search') }}" method="GET">
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
                    placeholder={{ __('ui.searcharticles...') }} aria-label="Cerca" style="padding-left: 2.5rem;">
            </div>
        </form>


        <!-- Navigation Actions -->
        <div class="navbar-actions">
            <a href="{{ route('create.article') }}" class="btn-sell">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            {{ __('ui.exit') }}
                        </a>
                        <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">@csrf</form>
                        @auth
                            @if (Auth::user()->is_revisor)
                                <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25"
                                    href="{{ route('revisor.index') }}">{{ __('ui.revisorZone') }}
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}
                                    </span>
                                </a>
                            @endif
                        @endauth
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
                                <img src="{{ asset('vendor/blade-flags/language-it.svg') }}" width="24"
                                    height="24" class="me-2" />
                                IT
                            </button>
                        </form>
                    </li>
                    <li>
                        <form class="d-inline" action="{{ route('setLocale', 'es') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('vendor/blade-flags/language-es.svg') }}" width="24"
                                    height="24" class="me-2" />
                                ES
                            </button>
                        </form>
                    </li>
                    <li>
                        <form class="d-inline" action="{{ route('setLocale', 'en') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('vendor/blade-flags/language-en.svg') }}" width="24"
                                    height="24" class="me-2" />
                                EN
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div>
                <a class="nav-link" href="{{ route('articles.favorites') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="me-1" viewBox="0 0 24 24">
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
