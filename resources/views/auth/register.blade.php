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

        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .register-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 450px;
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

        .password-requirements {
            background: rgba(255, 102, 0, 0.05);
            border: 1px solid rgba(255, 102, 0, 0.2);
            border-radius: 8px;
            padding: 1rem;
            margin-top: 0.5rem;
            margin-bottom: -0.5rem;
            font-size: 0.8rem;
            color: var(--text-secondary);
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .password-requirements.show {
            opacity: 1;
            max-height: 200px;
            margin-bottom: 1rem;
            transform: translateY(0);
        }

        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 0.4rem;
            transition: color 0.3s ease;
        }

        .requirement:last-child {
            margin-bottom: 0;
        }

        .requirement-icon {
            width: 16px;
            height: 16px;
            margin-right: 0.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            background: #e2e8f0;
            color: #64748b;
            transition: all 0.3s ease;
        }

        .requirement.valid {
            color: #059669;
        }

        .requirement.valid .requirement-icon {
            background: #10b981;
            color: white;
        }

        .requirement.invalid {
            color: #dc2626;
        }

        .requirement.invalid .requirement-icon {
            background: #ef4444;
            color: white;
        }

        @media (max-width: 768px) {
            .register-card {
                padding: 2rem;
                margin: 1rem;
            }
            
            .brand-title {
                font-size: 1.5rem;
            }
        }

        /* Animazioni */
        .register-card {
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
        .form-group:nth-child(2) { animation-delay: 0.15s; }
        .form-group:nth-child(3) { animation-delay: 0.2s; }
        .form-group:nth-child(4) { animation-delay: 0.25s; }
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

    <div class="register-container">
        <div class="register-card">
            <!-- Titolo -->
            <div class="brand-section">
                <h1 class="brand-title">{{ __('ui.register') }}</h1>
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
            <form action="{{ route('register') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="form-label">{{ __('ui.name:') }}</label>
                    <input 
                        type="text" 
                        class="form-input" 
                        id="name" 
                        name="name" 
                        placeholder="Inserisci il tuo nome"
                        value="{{ old('name') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="registerEmail" class="form-label">{{ __('ui.emailaddress') }}</label>
                    <input 
                        type="email" 
                        class="form-input" 
                        id="registerEmail" 
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
                    <div class="password-requirements" id="passwordRequirements">
                        <div class="requirement" id="lengthReq">
                            <span class="requirement-icon">✓</span>
                            {{ __('ui.minchars') }}
                        </div>
                        <div class="requirement" id="upperReq">
                            <span class="requirement-icon">✓</span>
                            {{ __('ui.uppercase') }}
                        </div>
                        <div class="requirement" id="lowerReq">
                            <span class="requirement-icon">✓</span>
                            {{ __('ui.lowercase') }}
                        </div>
                        <div class="requirement" id="numberReq">
                            <span class="requirement-icon">✓</span>
                            {{ __('ui.number') }}
                        </div>
                        <div class="requirement" id="specialReq">
                            <span class="requirement-icon">✓</span>
                            {{ __('ui.specialchar') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">{{ __('ui.confirmpw') }}</label>
                    <input 
                        type="password" 
                        class="form-input" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Conferma la tua password"
                        required
                    >
                </div>

                <button type="submit" class="submit-btn">
                    {{ __('ui.register') }}
                </button>
            </form>
            <div style="text-align:center; margin-top: 1rem;">
                <span>{{ __('ui.alreadyregistered') }}</span>
                <a href="{{ route('login') }}" style="color: var(--primary-color); font-weight: 600; text-decoration: underline; margin-left: 0.3em;">
                    {{ __('ui.login') }}
                </a>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const requirementsDiv = document.getElementById('passwordRequirements');
        const lengthReq = document.getElementById('lengthReq');
        const upperReq = document.getElementById('upperReq');
        const lowerReq = document.getElementById('lowerReq');
        const numberReq = document.getElementById('numberReq');
        const specialReq = document.getElementById('specialReq');

        passwordInput.addEventListener('focus', function() {
            requirementsDiv.classList.add('show');
        });

        passwordInput.addEventListener('blur', function() {
            setTimeout(() => {
                if (document.activeElement !== document.getElementById('password_confirmation')) {
                    requirementsDiv.classList.remove('show');
                }
            }, 200);
        });

        // Anche quando si fa focus sulla conferma password, mantieni i requisiti visibili
        document.getElementById('password_confirmation').addEventListener('focus', function() {
            if (passwordInput.value.length > 0) {
                requirementsDiv.classList.add('show');
            }
        });

        document.getElementById('password_confirmation').addEventListener('blur', function() {
            setTimeout(() => {
                requirementsDiv.classList.remove('show');
            }, 200);
        });

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            
            // Check length
            if (password.length >= 8) {
                lengthReq.classList.remove('invalid');
                lengthReq.classList.add('valid');
            } else {
                lengthReq.classList.remove('valid');
                lengthReq.classList.add('invalid');
            }
            
            // Check uppercase
            if (/[A-Z]/.test(password)) {
                upperReq.classList.remove('invalid');
                upperReq.classList.add('valid');
            } else {
                upperReq.classList.remove('valid');
                upperReq.classList.add('invalid');
            }
            
            // Check lowercase
            if (/[a-z]/.test(password)) {
                lowerReq.classList.remove('invalid');
                lowerReq.classList.add('valid');
            } else {
                lowerReq.classList.remove('valid');
                lowerReq.classList.add('invalid');
            }
            
            // Check number
            if (/[0-9]/.test(password)) {
                numberReq.classList.remove('invalid');
                numberReq.classList.add('valid');
            } else {
                numberReq.classList.remove('valid');
                numberReq.classList.add('invalid');
            }
            
            // Check special character
            if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
                specialReq.classList.remove('invalid');
                specialReq.classList.add('valid');
            } else {
                specialReq.classList.remove('valid');
                specialReq.classList.add('invalid');
            }
        });
    </script>

</x-layout>