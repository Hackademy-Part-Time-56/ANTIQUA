<nav class="navbar-modern">
    <div class="navbar-container">
        <!-- Logo Section -->
        <div class="navbar-brand-section">
            <a class="navbar-logo" href="{{ route('homepage') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Antiqua Logo">
            </a>
        </div>

        <!-- Searchbar -->
        <form class="d-flex ms-auto" role="search" action="" method="GET" >
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholder="Search" aria-label="search">
                <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2" >
                    Search
                </button>
            </div>
        </form>


        <!-- Navigation Actions -->
        <div class="navbar-actions">
            @guest
                <a href="{{ route('login') }}" class="nav-action-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Accedi</span>
                </a>
                <a href="{{ route('register') }}" class="nav-action-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Registrati</span>
                </a>
            @else
                <div class="user-menu">
                    <button class="user-menu-trigger">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="Avatar" class="user-avatar">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                        <svg class="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="user-dropdown">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-link" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Esci
                        </a>
                        <form action="{{route('logout')}}" method="post" class="d-none" id="form-logout">@csrf</form>
                    </div>
                </div>
            @endauth

            <a href="{{ route('create.article') }}" class="btn-sell">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Vendi
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" hidden>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Secondary Navigation -->
    <div class="navbar-secondary">
        <div class="navbar-containertwo">
            <nav class="secondary-nav">
                <a href="{{ route('homepage') }}" class="secondary-link {{ request()->routeIs('homepage') ? 'active' : '' }}">Home</a>
                <a href="{{ route('article.index') }}" class="secondary-link {{ request()->routeIs('article.index') ? 'active' : '' }}">Tutti gli articoli</a>
                
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
                                <a href="{{route('byCategory',['category'=>$category])}}" class="category-item">
                                    <div class="category-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                        </svg>
                                    </div>
                                    <span>{{ $category->name }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </nav>
        </div>
    </div>
</nav>