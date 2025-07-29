<x-layout>
    <style>
        :root {
            --primary-color: #ff6600;
            --primary-light: rgba(255, 102, 0, 0.1);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --border-color: rgba(0, 0, 0, 0.1);
            --card-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        body {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            font-family: 'Inter', 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .favorites-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            min-height: 100vh;
        }

        .favorites-header {
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

        .favorites-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), #e55a00);
        }

        .favorites-title {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .favorites-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), #e55a00);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            box-shadow: 0 6px 20px rgba(255, 102, 0, 0.3);
        }

        .favorites-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .article-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            transition: all 0.3s ease;
            height: fit-content;
        }

        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
        }

        .empty-icon {
            font-size: 4rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
            opacity: 0.7;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .empty-description {
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.6;
            max-width: 400px;
            margin: 0 auto 2rem;
        }

        .browse-btn {
            background: var(--primary-color);
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
            box-shadow: 0 4px 15px rgba(255, 102, 0, 0.3);
        }

        .browse-btn:hover {
            background: #e55a00;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 102, 0, 0.4);
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .favorites-container {
                padding: 1rem;
            }

            .favorites-header {
                padding: 1.5rem;
            }

            .favorites-title {
                font-size: 1.75rem;
                flex-direction: column;
                gap: 0.75rem;
            }

            .favorites-icon {
                width: 45px;
                height: 45px;
                font-size: 1.25rem;
            }

            .favorites-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .empty-state {
                padding: 3rem 1.5rem;
            }

            .empty-icon {
                font-size: 3rem;
            }

            .empty-title {
                font-size: 1.25rem;
            }
        }

        /* Animazioni */
        .favorites-header {
            animation: slideInDown 0.8s ease-out;
        }

        .empty-state {
            animation: fadeIn 0.8s ease-out 0.2s backwards;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

    <div class="favorites-container pt-5">
        <!-- Go Back Button -->
        <div class="container mt-3 d-flex justify-content-center p-5 d-md-none">
            <a href="javascript:history.back()" class="btn customcolor customoutline">
                <i class="fas fa-arrow-left"></i> {{ __('ui.back') }}
            </a>
        </div>
        <!-- Header -->
        <div class="favorites-header">
            <h1 class="favorites-title">
                <div class="favorites-icon"><svg fill="#000000" width="32px" height="32px" viewBox="0 0 24 24"
                        id="favourite" data-name="Line Color" xmlns="http://www.w3.org/2000/svg"
                        class="icon line-color">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="primary"
                                d="M19.57,5.44a4.91,4.91,0,0,1,0,6.93L12,20,4.43,12.37A4.91,4.91,0,0,1,7.87,4a4.9,4.9,0,0,1,3.44,1.44,4.46,4.46,0,0,1,.69.88,4.46,4.46,0,0,1,.69-.88,4.83,4.83,0,0,1,6.88,0Z"
                                style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </path>
                        </g>
                    </svg></div>
                {{ __('ui.yourfav') }}
            </h1>
        </div>

        <!-- Grid degli articoli o stato vuoto -->
        @forelse($articles as $article)
            @if($loop->first)
                <div class="favorites-grid">
            @endif

                <div>
                    @component('components.card', ['article' => $article])
                    @endcomponent
                </div>

                @if($loop->last)
                    </div>
                @endif
        @empty
            <div class="empty-state">
                <div class="empty-icon">💔</div>
                <h2 class="empty-title">{{ __('ui.havenotadded') }}</h2>
                <p class="empty-description">
                    Non hai ancora aggiunto nessun articolo ai tuoi preferiti.
                    Inizia a esplorare la nostra collezione di antiquariato per trovare
                    pezzi unici che catturano il tuo interesse!
                </p>
                <a href="{{ route('homepage') }}" class="browse-btn">
                    🔍 Esplora Antiquariato
                </a>
            </div>
        @endforelse
    </div>
</x-layout>