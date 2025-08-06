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
            animation: antiqueFloat 28s infinite linear;
            font-size: 1.3rem;
            top: -200px;
        }

        .antique-item:nth-child(1) {
            left: 12%;
            animation-delay: 0s;
            font-size: 1.5rem;
        }

        .antique-item:nth-child(2) {
            left: 28%;
            animation-delay: 7s;
            font-size: 1.2rem;
        }

        .antique-item:nth-child(3) {
            left: 44%;
            animation-delay: 14s;
            font-size: 1.4rem;
        }

        .antique-item:nth-child(4) {
            left: 60%;
            animation-delay: 21s;
            font-size: 1.3rem;
        }

        .antique-item:nth-child(5) {
            left: 76%;
            animation-delay: 28s;
            font-size: 1.6rem;
        }

        .antique-item:nth-child(6) {
            left: 88%;
            animation-delay: 35s;
            font-size: 1.1rem;
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

        .edit-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
            min-height: 100vh;
        }

        .edit-header {
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

        .edit-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), #e55a00);
        }

        .edit-title {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .edit-icon {
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

        .form-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            padding: 3rem;
            margin-bottom: 2rem;
        }

        .form-sections {
            display: grid;
            gap: 2rem;
        }

        .form-section {
            background: rgba(0, 0, 0, 0.02);
            border-radius: 12px;
            padding: 2rem;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-icon {
            width: 32px;
            height: 32px;
            background: var(--primary-light);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-row.two-cols {
            grid-template-columns: 1fr 1fr;
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
            font-weight: 600;
            font-size: 0.875rem;
        }

        .form-input,
        .form-textarea,
        .form-select {
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

        .form-textarea {
            min-height: 100px;
            resize: vertical;
            font-family: inherit;
        }

        .form-input:focus,
        .form-textarea:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 102, 0, 0.15);
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: var(--text-secondary);
        }

        .submit-section {
            text-align: center;
            padding-top: 1rem;
        }

        .submit-btn {
            background: var(--success-color);
            color: white;
            border: none;
            padding: 1rem 3rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .submit-btn:hover {
            background: #059669;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .edit-container {
                padding: 1rem;
            }

            .form-card {
                padding: 2rem;
            }

            .edit-title {
                font-size: 1.75rem;
            }

            .form-row.two-cols {
                grid-template-columns: 1fr;
            }

            .form-section {
                padding: 1.5rem;
            }
        }

        /* Animazioni */
        .edit-header {
            animation: slideInDown 0.8s ease-out;
        }

        .form-card {
            animation: fadeInUp 0.6s ease-out 0.2s backwards;
        }

        .form-section {
            animation: fadeIn 0.5s ease-out backwards;
        }

        .form-section:nth-child(1) {
            animation-delay: 0.3s;
        }

        .form-section:nth-child(2) {
            animation-delay: 0.4s;
        }

        .form-section:nth-child(3) {
            animation-delay: 0.5s;
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
    </div>

    <div class="edit-container">
        <!-- Header -->
        <div class="edit-header">
            <h1 class="edit-title">
                <div class="edit-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    </svg></div>
                {{ __('ui.editprof') }}
            </h1>
        </div>

        <!-- Form -->
        <div class="form-card">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <input type="hidden" name="profile_completed" value="1">

                <div class="form-sections">
                    <!-- Sezione Informazioni Personali -->
                    <div class="form-section">
                        <div class="section-title">
                            <div class="section-icon">👤</div>
                            {{ __('ui.personalinf') }}
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" class="form-label">{{ __('ui.name:') }}</label>
                                <input type="text" name="name" id="name" class="form-input"
                                    value="{{ old('name', $user->name) }}" required
                                    placeholder="Inserisci il tuo nome completo">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="bio" class="form-label">{{ __('ui.bio') }}</label>
                                <textarea name="bio" id="bio" class="form-textarea"
                                    placeholder="Racconta qualcosa di te, della tua esperienza nel settore antiquario...">{{ old('bio', $user->bio) }}</textarea>
                            </div>
                        </div>

                        <div class="form-row two-cols">
                            <div class="form-group">
                                <label for="specialization" class="form-label">{{ __('ui.spec') }}</label>
                                <input type="text" name="specialization" id="specialization" class="form-input"
                                    value="{{ old('specialization', $user->specialization) }}"
                                    placeholder="es. Mobili d'epoca, Ceramiche, Arte...">
                            </div>

                            <div class="form-group">
                                <label for="phone_number" class="form-label">{{ __('ui.phonenum') }}</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-input"
                                    value="{{ old('phone_number', $user->phone_number) }}"
                                    placeholder="+39 123 456 7890">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="location" class="form-label">{{ __('ui.loc') }}</label>
                                <input type="text" name="location" id="location" class="form-input"
                                    value="{{ old('location', $user->location) }}" placeholder={{ __('ui.provcity') }}>
                            </div>
                        </div>
                    </div>

                    <!-- Sezione Informazioni Aziendali -->
                    <div class="form-section">
                        <div class="section-title">
                            <div class="section-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
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
                                </svg></div>
                            {{ __('ui.companyinfo') }}
                        </div>

                        <div class="form-row two-cols">
                            <div class="form-group">
                                <label for="company_name" class="form-label">{{ __('ui.companyname') }}</label>
                                <input type="text" name="company_name" id="company_name" class="form-input"
                                    value="{{ old('company_name', $user->company_name) }}"
                                    placeholder="Nome della tua azienda">
                            </div>

                            <div class="form-group">
                                <label for="business_type" class="form-label">{{ __('ui.businesstype') }}</label>
                                <select name="business_type" id="business_type" class="form-select">
                                    <option value="">{{ __('ui.selectBT') }}</option>
                                    <option value="individual" {{ old('business_type', $user->business_type) == 'individual' ? 'selected' : '' }}>{{ __('ui.I') }}</option>
                                    <option value="company" {{ old('business_type', $user->business_type) == 'company' ? 'selected' : '' }}>{{ __('ui.C') }}</option>
                                    <option value="professional" {{ old('business_type', $user->business_type) == 'professional' ? 'selected' : '' }}>{{ __('ui.P') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="vat_number" class="form-label">{{ __('ui.iva') }}</label>
                                <input type="text" name="vat_number" id="vat_number" class="form-input"
                                    value="{{ old('vat_number', $user->vat_number) }}" placeholder="IT12345678901">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="business_address" class="form-label">{{ __('ui.taxadd') }}</label>
                                <input type="text" name="business_address" id="business_address" class="form-input"
                                    value="{{ old('business_address', $user->business_address) }}"
                                    placeholder={{ __('ui.snpc') }}>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sezione Submit -->
                <div class="submit-section">
                    <button type="submit" class="submit-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg> {{ __('ui.savech') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>