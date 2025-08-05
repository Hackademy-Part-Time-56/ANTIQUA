<x-layout>
    <style>
        :root {
            --primary-color: #ff6600;
            --primary-light: rgba(255, 102, 0, 0.1);
            --primary-border: rgba(255, 102, 0, 0.3);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --border-color: rgba(0, 0, 0, 0.1);
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
            animation: antiqueFloat 20s infinite linear;
            font-size: 2rem;
            top: -200px;
        }

        .antique-item:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
            font-size: 2.5rem;
        }

        .antique-item:nth-child(2) {
            left: 25%;
            animation-delay: 3s;
            font-size: 1.8rem;
        }

        .antique-item:nth-child(3) {
            left: 40%;
            animation-delay: 6s;
            font-size: 2.2rem;
        }

        .antique-item:nth-child(4) {
            left: 55%;
            animation-delay: 9s;
            font-size: 1.9rem;
        }

        .antique-item:nth-child(5) {
            left: 70%;
            animation-delay: 12s;
            font-size: 2.1rem;
        }

        .antique-item:nth-child(6) {
            left: 85%;
            animation-delay: 15s;
            font-size: 1.7rem;
        }

        .antique-item:nth-child(7) {
            left: 15%;
            animation-delay: 18s;
            font-size: 2.3rem;
        }

        .antique-item:nth-child(8) {
            left: 65%;
            animation-delay: 21s;
            font-size: 2rem;
        }

        @keyframes antiqueFloat {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(calc(100vh + 400px)) rotate(360deg);
                opacity: 0;
            }
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 400px;
            position: relative;
        }

        .brand-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .brand-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
            font-weight: 500;
            font-size: 0.875rem;
        }

        .form-input {
            width: 100%;
            padding: 0.875rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            background: #ffffff;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
            box-sizing: border-box;
        }

        .form-input::placeholder {
            color: var(--text-secondary);
        }

        .form-input:focus {
            border-color: var(--primary-color);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 102, 0, 0.15);
        }

        .submit-btn {
            width: 100%;
            padding: 0.875rem;
            background: var(--primary-color);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        .submit-btn:hover {
            background: #e55a00;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 102, 0, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .error-alert {
            background: rgba(248, 113, 113, 0.1);
            border: 1px solid rgba(248, 113, 113, 0.3);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            color: #dc2626;
        }

        .error-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .error-list li {
            padding: 0.25rem 0;
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .login-card {
                padding: 2rem;
                margin: 1rem;
            }
            
            .brand-title {
                font-size: 1.5rem;
            }
        }

        /* Animazioni */
        .login-card {
            animation: slideInUp 0.6s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group {
            animation: fadeIn 0.5s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .submit-btn { animation: fadeIn 0.5s ease-out 0.3s backwards; }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            position: relative;
        }

        .divider span {
            background: #fff;
            padding: 0 1rem;
            position: relative;
            z-index: 1;
            color: var(--text-primary);
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: var(--border-color);
            z-index: 0;
        }

        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.875rem;
            background: #4285F4;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-top: 0.5rem;
        }

        .google-btn:hover {
            background: #357ae8;
        }

        .google-icon {
            width: 1.2rem;
            height: 1.2rem;
            margin-right: 0.5rem;
        }

        .forgot-password {
            text-align: right;
            margin-top: -0.5rem;
            margin-bottom: 1.5rem;
        }

        .forgot-password-link {
            color: var(--primary-color);
            font-weight: 500;
            font-size: 0.875rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password-link:hover {
            color: #e55a00;
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

    <div class="login-container">
        <div class="login-card">
            <!-- Titolo -->
            <div class="brand-section">
                <h1 class="brand-title">{{ __('ui.login') }}</h1>
            </div>

            <!-- Alert errori -->
            @if ($errors->any())
                <div class="error-alert">
                    <ul class="error-list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <label for="loginEmail" class="form-label">{{ __('ui.emailaddress') }}</label>
                    <input 
                        type="email" 
                        class="form-input" 
                        id="loginEmail" 
                        name="email" 
                        placeholder="Inserisci la tua email"
                        value="{{ old('email') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('ui.pw') }}</label>
                    <input 
                        type="password" 
                        class="form-input" 
                        id="password" 
                        name="password" 
                        placeholder="Inserisci la tua password"
                        required
                    >
                </div>

                <!-- Link recupera password -->
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}" class="forgot-password-link">
                        {{__('ui.forgotpw') }}
                    </a>
                </div>

                <button type="submit" class="submit-btn">
                    {{ __('ui.login') }}
                </button>
            </form>

            <!-- Divider -->
            <div class="divider">
                <span>{{ __('ui.or') }}</span>
            </div>

            <!-- Google Login Button -->
            <a href="{{ route('google-auth') }}" class="google-btn">
                <svg class="google-icon" viewBox="0 0 24 24">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                {{ __('ui.google') }}
            </a>

            <div style="text-align:center; margin-top: 1rem;">
                <span>{{ __('ui.notregistered') }}</span>
                <a href="{{ route('register') }}" style="color: var(--primary-color); font-weight: 600; text-decoration: underline; margin-left: 0.3em;">
                    {{ __('ui.register') }}
                </a>
            </div>
        </div>
    </div>

        <div class="text-center mb-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{ __('ui.backhome') }}
            </a>
        </div>

        <style>
        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
        </style>
</x-layout>