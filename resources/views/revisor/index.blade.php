<x-layout>
    <style>
        :root {
            --primary-color: #ff6600;
            --primary-light: rgba(255, 102, 0, 0.1);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --border-color: rgba(0, 0, 0, 0.1);
            --success-color: #10b981;
            --danger-color: #ef4444;
            --card-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        body {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            font-family: 'Inter', 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .floating-antiques {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .antique-item {
            position: absolute;
            color: var(--primary-color);
            opacity: 0;
            animation: antiqueFloat 30s infinite linear;
            font-size: 1.2rem;
            top: -200px;
        }

        .antique-item:nth-child(1) {
            left: 8%;
            animation-delay: 0s;
            font-size: 1.4rem;
        }

        .antique-item:nth-child(2) {
            left: 20%;
            animation-delay: 6s;
            font-size: 1.1rem;
        }

        .antique-item:nth-child(3) {
            left: 35%;
            animation-delay: 12s;
            font-size: 1.3rem;
        }

        .antique-item:nth-child(4) {
            left: 50%;
            animation-delay: 18s;
            font-size: 1.2rem;
        }

        .antique-item:nth-child(5) {
            left: 65%;
            animation-delay: 24s;
            font-size: 1.5rem;
        }

        .antique-item:nth-child(6) {
            left: 80%;
            animation-delay: 30s;
            font-size: 1.1rem;
        }

        .antique-item:nth-child(7) {
            left: 92%;
            animation-delay: 36s;
            font-size: 1.3rem;
        }

        @keyframes antiqueFloat {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.3;
            }

            90% {
                opacity: 0.3;
            }

            100% {
                transform: translateY(calc(100vh + 400px)) rotate(360deg);
                opacity: 0;
            }
        }

        .dashboard-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .dashboard-header {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            padding: 2rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .dashboard-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), #e55a00);
        }

        .dashboard-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .reviewer-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), #e55a00);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            box-shadow: 0 8px 25px rgba(255, 102, 0, 0.3);
        }

        .review-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .gallery-section {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            padding: 2rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Da 3 a 2 colonne */
            gap: 2rem; /* Più spazio tra le immagini */
        }

        .gallery-image {
            border-radius: 12px;
            object-fit: cover;
            width: 100%;
            height: 350px; /* Altezza maggiore */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .details-section {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .article-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }

        .article-meta {
            margin-bottom: 1.5rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
            font-size: 1.1rem;
        }

        .meta-icon {
            width: 24px;
            height: 24px;
            color: var(--primary-color);
        }

        .meta-label {
            font-weight: 600;
            color: var(--text-secondary);
        }

        .meta-value {
            color: var(--text-primary);
            font-weight: 500;
        }

        .category-tag {
            background: var(--primary-light);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.875rem;
            display: inline-block;
        }

        .article-description {
            background: rgba(0, 0, 0, 0.02);
            border-radius: 8px;
            padding: 1rem;
            line-height: 1.6;
            color: var(--text-primary);
            margin-bottom: 2rem;
        }

        .action-section {
            display: flex;
            gap: 2rem;
            align-items: end;
        }

        .action-form {
            text-align: center;
        }

        .price-input-group {
            margin-bottom: 1rem;
        }

        .price-label {
            display: block;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        .price-input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            background: #ffffff;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .price-input:focus {
            border-color: var(--success-color);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.15);
        }

        .action-button {
            width: 70px;
            height: 70px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: var(--card-shadow);
        }

        .reject-btn {
            background: linear-gradient(135deg, var(--danger-color), #dc2626);
            color: white;
        }

        .reject-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        }

        .accept-btn {
            background: linear-gradient(135deg, var(--success-color), #059669);
            color: white;
        }

        .accept-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
        }

        .action-icon {
            font-size: 1.5rem;
        }

        .action-label {
            font-size: 0.75rem;
            color: var(--text-secondary);
            margin-top: 0.5rem;
            font-weight: 500;
        }

        .no-articles {
            text-align: center;
            padding: 4rem 2rem;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
        }

        .no-articles-title {
            font-size: 2.5rem;
            font-weight: 300;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            font-style: italic;
        }

        .no-articles-icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .return-btn {
            background: var(--success-color);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .return-btn:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
            color: white;
            text-decoration: none;
        }

        .success-message {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: var(--success-color);
            padding: 1rem 2rem;
            border-radius: 12px;
            text-align: center;
            font-weight: 600;
            margin-top: 2rem;
            backdrop-filter: blur(10px);
        }

        @media (max-width: 968px) {
            .review-content {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .dashboard-title {
                font-size: 2rem;
            }

            .action-section {
                flex-direction: column;
                gap: 1rem;
                align-items: center;
            }
        }

        @media (min-width: 992px) {
            .product-gallery {
                margin-left: 0; /* Reset margin */
            }
            .details-section {
                margin-right: 0;
            }
        }

        /* Animazioni */
        .dashboard-header {
            animation: slideInDown 0.8s ease-out;
        }

        .gallery-section,
        .details-section {
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .gallery-section {
            animation-delay: 0.1s;
        }

        .details-section {
            animation-delay: 0.2s;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- Oggetti di antiquariato fluttuanti -->
    <div class="floating-antiques">
        <div class="antique-item">🏺</div>
        <div class="antique-item">⚱️</div>
        <div class="antique-item">🕰️</div>
        <div class="antique-item">🖼️</div>
        <div class="antique-item">💎</div>
        <div class="antique-item">👑</div>
        <div class="antique-item">🗿</div>
    </div>

    <div class="dashboard-container pt-5">
        <!-- Header Dashboard -->
        <div class="dashboard-header">
            <h1 class="dashboard-title">
                <div class="reviewer-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard-teacher">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" />
                        <path d="M12 14a2 2 0 1 0 4.001 -.001a2 2 0 0 0 -4.001 .001" />
                        <path d="M17 19a2 2 0 0 0 -2 -2h-2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                {{ __('ui.reviewerdashboard') }}
            </h1>
        </div>

        @if ($article_to_check)
        <div class="review-content">
            <!-- Sezione Galleria -->
            <div class="gallery-section">
                <div class="product-gallery">
                    @if($article_to_check->images->count() > 0)
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($article_to_check->images as $key => $image)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <img src="{{ $image->getUrl(1200, 1000) }}" class="d-block w-100 rounded shadow main-imagex"
                                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}">
                                        <div class="mb-2">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-3 text-center">
                                                    <div class="{{ $image->adult }}"></div>
                                                    <small>adult</small>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="{{ $image->violence }}"></div>
                                                    <small>violence</small>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="{{ $image->sport }}"></div>
                                                    <small>sport</small>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="{{ $image->racy }}"></div>
                                                    <small>racy</small>
                                                </div>
                                                <div class="col-3 text-center mt-2">
                                                    <div class="{{ $image->medical }}"></div>
                                                    <small>medical</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h6>Labels</h6>
                                            @if (is_array($image->labels) && count($image->labels))
                                                @foreach ($image->labels as $label)
                                                    <span class="badge bg-secondary me-1">{{ $label }}</span>
                                                @endforeach
                                            @else
                                                <span class="text-muted">No labels</span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($article_to_check->images->count() > 1)
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
                        <div class="mt-3">
                            <h6>Labels</h6>
                            <span class="text-muted">No labels</span>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Sezione Dettagli -->
            <div class="details-section">
                <div>
                    <h2 class="article-title">{{ $article_to_check->title }}</h2>
                    <div class="article-meta">
                        <div class="meta-item">
                            <span class="meta-icon">
                                <!-- autore icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-feather"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 9.585v6.415h6.414l-2.707 2.707a1 1 0 0 1 -.112 .097l-.11 .071l-.114 .054l-.105 .035l-.149 .03l-.117 .006h-4.586l-1.707 1.707a1 1 0 1 1 -1.414 -1.414l1.707 -1.709v-4.584l.003 -.075l.017 -.126l.03 -.111l.044 -.111l.052 -.098l.067 -.096l.08 -.09z" /><path d="M19.414 11l-3 3h-4.914l2.914 -3z" /><path d="M13 4.586v4.998l-3 3v-4.999z" /><path d="M16.482 3a4.515 4.515 0 0 1 4.518 4.514a4.7 4.7 0 0 1 -.239 1.487l-5.761 -.001v-5.76c.469 -.158 .968 -.24 1.482 -.24" /></svg>
                            </span>
                            <span class="meta-label">{{ __('ui.author:') }}</span>
                            <span class="meta-value">{{ $article_to_check->user->name }}</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-icon">
                                <!-- price icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-basket-dollar"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M17 10l-2 -6" /><path d="M7 10l2 -6" /><path d="M13 20h-5.756a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304" /><path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" /><path d="M19 21v1m0 -8v1" /></svg>
                            </span>
                            <span class="meta-label">{{ __('ui.price:') }}</span>
                            <span class="meta-value">€{{ number_format($article_to_check->price, 2) }}</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-icon">
                                <!-- category icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                            </span>
                            <span class="category-tag">#{{ $article_to_check->category->name }}</span>
                        </div>
                    </div>
                    <div class="article-description">
                        {{ $article_to_check->description }}
                    </div>
                </div>
                <!-- Azioni -->
                <div class="d-flex pb-4 justify-content-around align-items-end">
                    <!-- Form per rifiutare -->
                    <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="radio-group">
                            <div class="radio-container danger">
                                <label for="reject-btn" class="radio-button"></label>
                                <input type="submit" id="reject-btn" name="action" value="reject"
                                    class="radio-input-element" style="cursor: pointer;" />
                                <svg class="radio-icon-element" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M6 18 18 6M6 6l12 12"></path>
                                </svg>
                                <div class="glow"></div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <small class="text-muted">{{ __('ui.reject') }}</small>
                        </div>
                    </form>
                    <!-- Form per accettare con stima prezzo -->
                    <form method="POST" action="{{ route('accept', $article_to_check) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="estimated_price" class="form-label">{{ __('ui.priceest') }}</label>
                            <input type="number" step="0.01" name="estimated_price" id="estimated_price"
                                class="form-control" required>
                        </div>
                        <div class="radio-group">
                            <div class="radio-container success">
                                <label for="accept-btn" class="radio-button"></label>
                                <input type="submit" id="accept-btn" name="action" value="accept"
                                    class="radio-input-element" style="cursor: pointer;" />
                                <svg class="radio-icon-element" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20,6 9,17 4,12"></polyline>
                                </svg>
                                <div class="glow"></div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <small class="text-muted">{{ __('ui.acceptandsave') }}</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        <!-- Nessun articolo da revisionare -->
        <div class="no-articles">
            <div class="no-articles-icon">📋</div>
            <h2 class="no-articles-title">{{ __('ui.therearenoarticlestoreview') }}</h2>
            <a href="{{ route('homepage') }}" class="return-btn">
                {{ __('ui.returntohomepage') }}
            </a>
        </div>
        @endif

        <!-- Messaggio di successo -->
        @if (session()->has('message'))
        <div class="success-message">
            ✅ {{ session('message') }}
        </div>
        @endif
    </div>
</x-layout>