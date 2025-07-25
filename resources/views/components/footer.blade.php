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
                    <img src="{{ asset('images/logo-bianco.png') }}" alt="Il Tuo Logo" class="logo-placeholder">
                </div>
                <ul class="footer-links">
                    <li><a href="/chi-siamo">Chi Siamo</a></li>
                    <li><a href="{{route('become.revisor')}}">Lavora con noi</a></li>
                    <li><a href="/stampa">Stampa</a></li>
                    <li><a href="/contatti">Contatti</a></li>
                </ul>
            </div>

            <div class="footer-section footer-help">
                <h3>Aiuto & Supporto</h3>
                <ul class="footer-links">
                    <li><a href="/centro-assistenza">Centro Assistenza</a></li>
                    <li><a href="/come-funziona">Come Funziona</a></li>
                    <li><a href="/spedizione">Spedizione</a></li>
                    <li><a href="/pagamenti">Pagamenti</a></li>
                    <li><a href="/sicurezza">Sicurezza</a></li>
                </ul>
            </div>

            <div class="footer-section footer-legal">
                <h3>Informazioni Legali</h3>
                <ul class="footer-links">
                    <li><a href="/termini-condizioni">Termini e Condizioni</a></li>
                    <li><a href="/informativa-privacy">Informativa sulla Privacy</a></li>
                    <li><a href="/politica-cookie">Politica sui Cookie</a></li>
                    <li><a href="/note-legali">Note Legali</a></li>
                </ul>
            </div>

            <div class="footer-section footer-explore">
                <h3>Esplora</h3>
                <ul class="footer-links">
                    <li><a href="/categorie">Categorie Popolari</a></li>
                    <li><a href="/aste-in-corso">Aste in Corso</a></li>
                    <li><a href="/app-mobili">App Mobili</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </div>

            <div class="footer-section footer-newsletter-social">
                <h3>Rimani Connesso</h3>
                <p>Iscriviti alla nostra newsletter per scoprire le ultime novità, aste e promozioni esclusive!</p>
                <form action="/iscriviti-newsletter" method="POST" class="newsletter-form">
                    <input type="email" name="email" placeholder="La tua email" required aria-label="Inserisci la tua email per la newsletter">
                    <button type="submit">Iscriviti</button>
                </form>

                <div class="social-icons">
                    <?php foreach ($social_links as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo htmlspecialchars($social['name']); ?>">
                            <i class="fab <?php echo htmlspecialchars($social['icon']); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-container bottom-content">
            <p class="copyright">&copy; <?php echo getCopyrightYear(); ?> Antiqua. Tutti i diritti riservati.</p>
            <div class="payment-methods">
                <?php foreach ($payment_methods as $method): ?>
                    <img src="<?php echo htmlspecialchars($method['src']); ?>" alt="<?php echo htmlspecialchars($method['alt']); ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</footer>