<?php
// Funzione per ottenere l'anno corrente per il copyright
function getCopyrightYear() {
    return date('Y');
}

// Array di esempio per i link dei social media
$social_links = [
    ['icon' => 'fa-facebook-f', 'url' => 'https://www.facebook.com/iltuosito', 'name' => 'Facebook'],
    ['icon' => 'fa-instagram', 'url' => 'https://www.instagram.com/iltuosito', 'name' => 'Instagram'],
    ['icon' => 'fa-twitter', 'url' => 'https://www.twitter.com/iltuosito', 'name' => 'Twitter'],
    ['icon' => 'fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/iltuosito', 'name' => 'LinkedIn'],
    ['icon' => 'fa-youtube', 'url' => 'https://www.youtube.com/iltuosito', 'name' => 'YouTube'],
];

// Array di esempio per i metodi di pagamento (sostituisci con i percorsi reali delle tue icone)
$payment_methods = [
    ['src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Visa.svg/1200px-Visa.svg.png', 'alt' => 'Visa'],
    ['src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/800px-Mastercard-logo.svg.png', 'alt' => 'MasterCard'],
    ['src' => 'https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg', 'alt' => 'PayPal'],
    // Aggiungi altri metodi di pagamento se necessario
];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<footer class="main-footer">
    <div class="footer-upper">
        <div class="footer-container">
            <div class="footer-section footer-about">
                <div class="footer-logo">
                    <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/logo-bianco.png') }}" alt="Il Tuo Logo" class="logo-placeholder">
                    </a>
                </div>
                <ul class="footer-links">
                    <li><a href="/chi-siamo">{{ __('ui.aboutus') }}</a></li>
                    <li><a href="{{route('become.revisor')}}">{{ __('ui.workwithus') }}</a></li>
                    <li><a href="/stampa">{{ __('ui.press') }}</a></li>
                    <li><a href="/contatti">{{ __('ui.contact') }}</a></li>
                </ul>
            </div>

            <div class="footer-section footer-help">
                <h3>{{ __('ui.helpandsupport') }}</h3>
                <ul class="footer-links">
                    <li><a href="/centro-assistenza">{{ __('ui.helpcenter') }}</a></li>
                    <li><a href="/come-funziona">{{ __('ui.howitworks') }}</a></li>
                    <li><a href="/spedizione">{{ __('ui.shipping') }}</a></li>
                    <li><a href="/pagamenti">{{ __('ui.payments') }}</a></li>
                    <li><a href="/sicurezza">{{ __('ui.security') }}</a></li>
                </ul>
            </div>

            <div class="footer-section footer-legal">
                <h3>{{ __('ui.legalinformation') }}</h3>
                <ul class="footer-links">
                    <li><a href="/termini-condizioni">{{ __('ui.termsandcondition') }}</a></li>
                    <li><a href="/informativa-privacy">{{ __('ui.privacypolicy') }}</a></li>
                    <li><a href="/politica-cookie">{{ __('ui.cookiepolicy') }}</a></li>
                    <li><a href="/note-legali">{{ __('ui.legalnotices') }}</a></li>
                </ul>
            </div>

            <div class="footer-section footer-explore">
                <h3>{{ __('ui.explore') }}</h3>
                <ul class="footer-links">
                    <li><a href="/categorie">{{ __('ui.popularcategories') }}</a></li>
                    <li><a href="/aste-in-corso">{{ __('ui.liveauctions') }}</a></li>
                    <li><a href="/app-mobili">{{ __('ui.mobileapps') }}</a></li>
                    <li><a href="/blog">{{ __('ui.blog') }}</a></li>
                </ul>
            </div>

            <div class="footer-section footer-newsletter-social">
                <h3>{{ __('ui.stayconnected') }}</h3>
                <p>{{ __('ui.subscribetoournewsletter') }}</p>
                <form action="/iscriviti-newsletter" method="POST" class="newsletter-form">
                    <input type="email" name="email" placeholder="La tua email" required aria-label="Inserisci la tua email per la newsletter">
                    </form>
                <button class="buttonProva footer-section footer-newsletter-social text-white bg-color-transparent"  type="submit">{{ __('ui.subscribe') }}</button>

                
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-container bottom-content">
            <p class="copyright">&copy; <?php echo getCopyrightYear(); ?> {{ __('ui.copyright') }} </p>
            <div class="payment-methods">
                <?php foreach ($payment_methods as $method): ?>
                    <img src="<?php echo htmlspecialchars($method['src']); ?>" alt="<?php echo htmlspecialchars($method['alt']); ?>">
                <?php endforeach; ?>
            </div>
            <div class="social-icons">
                    <?php foreach ($social_links as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo htmlspecialchars($social['name']); ?>">
                            <i class="fab <?php echo htmlspecialchars($social['icon']); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
        </div>
        
    </div>

</footer>