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
            animation: antiqueFloat 25s infinite linear;
            font-size: 10rem;
            top: -200px;
        }

        .antique-item:nth-child(1) {
            left: 5%;
            animation-delay: 0s;
            font-size: 1.8rem;
        }

        .antique-item:nth-child(2) {
            left: 15%;
            animation-delay: 5s;
            font-size: 1.4rem;
        }

        .antique-item:nth-child(3) {
            left: 30%;
            animation-delay: 10s;
            font-size: 1.6rem;
        }

        .antique-item:nth-child(4) {
            left: 45%;
            animation-delay: 15s;
            font-size: 1.3rem;
        }

        .antique-item:nth-child(5) {
            left: 60%;
            animation-delay: 20s;
            font-size: 1.7rem;
        }

        .antique-item:nth-child(6) {
            left: 75%;
            animation-delay: 25s;
            font-size: 1.5rem;
        }

        .antique-item:nth-child(7) {
            left: 85%;
            animation-delay: 30s;
            font-size: 1.4rem;
        }

        .antique-item:nth-child(8) {
            left: 95%;
            animation-delay: 35s;
            font-size: 1.6rem;
        }

        @keyframes antiqueFloat {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.4;
            }

            90% {
                opacity: 0.4;
            }

            100% {
                transform: translateY(calc(100vh + 400px)) rotate(360deg);
                opacity: 0;
            }
        }

        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            min-height: 100vh;
        }

        .profile-header {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            padding: 3rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), #e55a00);
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--primary-color), #e55a00);
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(255, 102, 0, 0.3);
            animation: pulse 3s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .profile-name {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .profile-email {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .revisor-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--success-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-areas:
                "bio bio bio"
                "prof stats contact";
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .bio-card {
            grid-area: bio;
        }

        .stats-card {
            grid-area: stats;
        }

        .info-card:nth-of-type(2) {
            grid-area: prof;
        }

        /* Informazioni Professionali */
        .info-card:nth-of-type(3) {
            grid-area: contact;
        }

        /* Contatti & Ubicazione */

        .info-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .card-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .info-value {
            color: var(--text-primary);
            font-weight: 500;
            text-align: right;
            flex: 1;
            margin-left: 1rem;
        }

        .stats-card {
            background: linear-gradient(135deg, var(--primary-color), #e55a00);
            color: white;
            border: none;
        }

        .stats-card .card-title {
            color: white;
        }

        .stats-card .info-label {
            color: rgba(255, 255, 255, 0.8);
        }

        .stats-card .info-value {
            color: white;
            font-weight: 700;
        }

        .edit-btn {
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

        .edit-btn:hover {
            background: #e55a00;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 102, 0, 0.4);
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .profile-container {
                padding: 1rem;
            }

            .profile-header {
                padding: 2rem;
            }

            .profile-name {
                font-size: 2rem;
            }

            .profile-avatar {
                width: 100px;
                height: 100px;
                font-size: 2.5rem;
            }

            .profile-grid {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .bio-card,
            .stats-card,
            .info-card {
                width: 100%;
                grid-area: unset;
            }

            /* Animazioni */
            .profile-header {
                animation: slideInDown 0.8s ease-out;
            }

            .info-card {
                animation: fadeInUp 0.6s ease-out backwards;
            }

            .info-card:nth-child(1) {
                animation-delay: 0.1s;
            }

            .info-card:nth-child(2) {
                animation-delay: 0.2s;
            }

            .info-card:nth-child(3) {
                animation-delay: 0.3s;
            }

            .info-card:nth-child(4) {
                animation-delay: 0.4s;
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
        <div class="antique-item">⚖️</div>
    </div>

    <div class="profile-container pt-5">
        <!-- Go Back Button -->
        <div class="container mt-3 d-flex justify-content-center p-5 d-md-none">
            <a href="javascript:history.back()" class="btn customcolor customoutline">
                <i class="fas fa-arrow-left"></i> {{ __('ui.back') }}
            </a>
        </div>
        <!-- Header del Profilo -->
        <div class="profile-header">
            <div class="profile-avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <h1 class="profile-name">{{ $user->name }}</h1>
            <div class="profile-email">{{ $user->email }}</div>

            @if($user->is_revisor)
                <div class="revisor-badge">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-cookie-man">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 2a5 5 0 0 1 2.845 9.112l.147 .369l1.755 -.803c.969 -.443 2.12 -.032 2.571 .918a1.88 1.88 0 0 1 -.787 2.447l-.148 .076l-2.383 1.089v2.02l1.426 1.425l.114 .125a1.96 1.96 0 0 1 -2.762 2.762l-.125 -.114l-2.079 -2.08l-.114 -.124a2 2 0 0 1 -.161 -.22h-.599q -.071 .114 -.16 .22l-.115 .125l-2.08 2.079a1.96 1.96 0 0 1 -2.886 -2.648l.114 -.125l1.427 -1.426v-2.019l-2.383 -1.09l-.148 -.075a1.88 1.88 0 0 1 -.787 -2.447c.429 -.902 1.489 -1.318 2.424 -.978l.147 .06l1.755 .803l.147 -.369a5 5 0 0 1 -2.15 -3.895v-.217a5 5 0 0 1 5 -5z" />
                            <path d="M12 16h.01" />
                            <path d="M12 13h.01" />
                            <path d="M10 7h.01" />
                            <path d="M14 7h.01" />
                            <path d="M12 9h.01" />
                        </svg>
                    </span>
                    Revisore Ufficiale
                </div>
            @endif

            @auth
                @if(auth()->id() == $user->id)
                    <div style="margin-top: 2rem;">
                        <a href="{{ route('profile.edit') }}" class="edit-btn">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                </svg>
                            </span>
                            Modifica Profilo
                        </a>
                    </div>
                @endif
            @endauth
        </div>

        <!-- Griglia delle Informazioni -->
        <div class="profile-grid">
            <!-- Bio -->
            @if($user->bio)
                <div class="info-card bio-card">
                    <div class="card-title">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-ampersand">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M19 20l-10.403 -10.972a2.948 2.948 0 0 1 0 -4.165a2.94 2.94 0 0 1 4.161 0a2.948 2.948 0 0 1 0 4.165l-4.68 4.687a3.685 3.685 0 0 0 0 5.207a3.675 3.675 0 0 0 5.2 0l5.722 -5.922" />
                            </svg>
                        </div>
                        Biografia
                    </div>
                    <p style="color: var(--text-primary); line-height: 1.6; margin: 0;">
                        {{ $user->bio }}
                    </p>
                </div>
            @endif
            <!-- Informazioni Professional i-->
            <div class="info-card">
                <div class="card-title">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21l18 0" />
                            <path d="M9 8l1 0" />
                            <path d="M9 12l1 0" />
                            <path d="M9 16l1 0" />
                            <path d="M14 8l1 0" />
                            <path d="M14 12l1 0" />
                            <path d="M14 16l1 0" />
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                        </svg>
                    </div>
                    Informazioni Professionali
                </div>

                @if($user->is_revisor && $user->specialization)
                    <div class="info-item">
                        <span class="info-label">Specializzazione</span>
                        <span class="info-value">{{ $user->specialization }}</span>
                    </div>
                @endif

                @if($user->company_name)
                    <div class="info-item">
                        <span class="info-label">Nome Azienda</span>
                        <span class="info-value">{{ $user->company_name }}</span>
                    </div>
                @endif

                @if($user->business_type)
                    <div class="info-item">
                        <span class="info-label">Tipo Attività</span>
                        <span class="info-value">{{ $user->business_type }}</span>
                    </div>
                @endif

                @if($user->vat_number)
                    <div class="info-item">
                        <span class="info-label">Partita IVA</span>
                        <span class="info-value">{{ $user->vat_number }}</span>
                    </div>
                @endif
            </div>

            <!-- Informazioni di Contatto -->
            <div class="info-card">
                <div class="card-title">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-address-book">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z" />
                            <path d="M10 16h6" />
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M4 8h3" />
                            <path d="M4 12h3" />
                            <path d="M4 16h3" />
                        </svg>
                    </div>
                    Contatti & Ubicazione
                </div>

                @if($user->phone_number)
                    <div class="info-item">
                        <span class="info-label">Telefono</span>
                        <span class="info-value">{{ $user->phone_number }}</span>
                    </div>
                @endif

                @if($user->location)
                    <div class="info-item">
                        <span class="info-label">Località</span>
                        <span class="info-value">{{ $user->location }}</span>
                    </div>
                @endif

                @if($user->business_address)
                    <div class="info-item">
                        <span class="info-label">Indirizzo Fiscale</span>
                        <span class="info-value">{{ $user->business_address }}</span>
                    </div>
                @endif
            </div>

            <!-- Statistiche -->
            <div class="info-card stats-card">
                <div class="card-title">
                    <div class="card-icon" style="background: rgba(255,255,255,0.2); color: white;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chart-dots">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 3v18h18" />
                            <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M10.16 10.62l2.34 2.88" />
                            <path d="M15.088 13.328l2.837 -4.586" />
                        </svg>
                    </div>
                    Statistiche
                </div>

                <div class="info-item">
                    <span class="info-label">Vendite Totali</span>
                    <span class="info-value">{{ $user->total_sales ?? '0' }}</span>
                </div>

                <div class="info-item">
                    <span class="info-label">Iscritto dal</span>
                    <span class="info-value">
                        {{ $user->member_since ? \Carbon\Carbon::parse($user->member_since)->format('d/m/Y') : 'Non disponibile' }}
                    </span>
                </div>

                <div class="info-item">
                    <span class="info-label">Ultima Attività</span>
                    <span class="info-value">
                        {{ $user->last_active ? \Carbon\Carbon::parse($user->last_active)->diffForHumans() : 'Non disponibile' }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout>