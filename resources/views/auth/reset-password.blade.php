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

        .reset-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .reset-card {
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
        }

        .submit-btn:hover {
            background: #e55a00;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 102, 0, 0.3);
        }

        .error-alert {
            background: rgba(248, 113, 113, 0.1);
            border: 1px solid rgba(248, 113, 113, 0.3);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            color: #dc2626;
        }
    </style>

    <div class="reset-container">
        <div class="reset-card">
            <div class="brand-section">
                <h1 class="brand-title">{{ __('ui.newpassword') }}</h1>
            </div>

            @if ($errors->any())
                <div class="error-alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('ui.email:') }}</label>
                    <input 
                        type="email" 
                        class="form-input" 
                        id="email" 
                        name="email" 
                        value="{{ old('email', $request->email) }}"
                        required
                        readonly
                    >
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('ui.newpassword') }}</label>
                    <input 
                        type="password" 
                        class="form-input" 
                        id="password" 
                        name="password" 
                        placeholder="Inserisci la nuova password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">{{ __('ui.confirmpassword') }}</label>
                    <input 
                        type="password" 
                        class="form-input" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Conferma la nuova password"
                        required
                    >
                </div>

                <button type="submit" class="submit-btn">
                    {{ __('ui.resetpw') }}
                </button>
            </form>
        </div>
    </div>
</x-layout>