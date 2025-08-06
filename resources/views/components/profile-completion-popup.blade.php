@if(auth()->check() && !auth()->user()->profile_completed)
<div id="profile-popup" class="profile-completion-overlay">
    <div class="profile-completion-popup">
        <div class="popup-header">
            <div class="popup-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <h2>{{ __('ui.welcome') }} {{ auth()->user()->name }}!</h2>
            <p>{{ __('ui.complete_profile_message') }}</p>
        </div>
        
        <div class="popup-content">
            <div class="benefits-list">
                <div class="benefit-item">
                    <span class="benefit-icon">✨</span>
                    <span>{{ __('ui.personalize_experience') }}</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">🔍</span>
                    <span>{{ __('ui.better_recommendations') }}</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">🤝</span>
                    <span>{{ __('ui.build_trust') }}</span>
                </div>
            </div>
        </div>
        
        <div class="popup-actions">
            <a href="{{ route('profile.edit') }}" class="complete-btn">
                {{ __('ui.complete_profile') }}
            </a>
            <button onclick="closePopup()" class="skip-btn">
                {{ __('ui.skip_for_now') }}
            </button>
        </div>
    </div>
</div>

<style>
.profile-completion-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    animation: fadeIn 0.3s ease-out;
}

.profile-completion-popup {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    max-width: 500px;
    width: 90%;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    animation: slideUp 0.4s ease-out;
    text-align: center;
}

.popup-header {
    margin-bottom: 2rem;
}

.popup-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #ff6600, #e55a00);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
}

.popup-header h2 {
    color: #2d3748;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
}

.popup-header p {
    color: #718096;
    margin: 0;
}

.benefits-list {
    margin: 1.5rem 0;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem;
    margin-bottom: 0.5rem;
    background: rgba(255, 102, 0, 0.05);
    border-radius: 10px;
    text-align: left;
}

.benefit-icon {
    font-size: 1.2rem;
}

.popup-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
}

.complete-btn {
    flex: 2;
    background: #ff6600;
    color: white;
    text-decoration: none;
    padding: 1rem;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.complete-btn:hover {
    background: #e55a00;
    transform: translateY(-2px);
}

.skip-btn {
    flex: 1;
    background: transparent;
    color: #718096;
    border: 2px solid #e2e8f0;
    padding: 1rem;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.skip-btn:hover {
    border-color: #cbd5e0;
    color: #4a5568;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { 
        opacity: 0;
        transform: translateY(50px);
    }
    to { 
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .popup-actions {
        flex-direction: column;
    }
    
    .complete-btn,
    .skip-btn {
        flex: none;
    }
}
</style>

<script>
const userId = {{ auth()->user()->id }};

function closePopup() {
    document.getElementById('profile-popup').style.display = 'none';
    // Salva con l'ID utente specifico
    localStorage.setItem(`profile_popup_dismissed_${userId}`, 'true');
}

// Pulisci il vecchio localStorage generale (solo una volta)
if (localStorage.getItem('profile_popup_dismissed')) {
    localStorage.removeItem('profile_popup_dismissed');
}

// Controlla se il popup è già stato chiuso per questo utente specifico
if (localStorage.getItem(`profile_popup_dismissed_${userId}`) === 'true') {
    document.getElementById('profile-popup').style.display = 'none';
}
</script>
@endif