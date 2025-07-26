<x-layout>
    <div class="verification-container">
        <div class="verification-card">
            <div class="verification-icon">
                <i class="fas fa-envelope-circle-check"></i>
            </div>

            <h1 class="verification-title">Verifica la tua email</h1>

            <p class="verification-text">
                Prima di procedere, controlla la tua email per il link di verifica.
            </p>

            @if (session('message'))
                <div class="success-alert" id="successMessage">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('message') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-resend" id="resendBtn">
                    <i class="fas fa-paper-plane me-2"></i>
                    Invia email di verifica
                </button>
            </form>
        </div>
    </div>
</x-layout>