<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-antiqua">Pagamenti su ANTIQUA</h1>
            <p class="lead text-muted">Acquista in tutta sicurezza e comodità</p>
        </div>

        <div class="row g-5">
            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">💳 Metodi di pagamento</h4>
                    <ul class="list-unstyled">
                        <li>✅ Carte di credito e debito (Visa, Mastercard, American Express)</li>
                        <li>✅ PayPal</li>
                        <li>✅ Apple Pay / Google Pay</li>
                        <li>✅ Bonifico bancario</li>
                    </ul>
                    <p class="text-muted mt-3">Tutti i pagamenti vengono elaborati tramite partner certificati.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">🔒 Sicurezza dei pagamenti</h4>
                    <p>
                        La tua sicurezza è la nostra priorità. Utilizziamo protocolli di crittografia SSL e strumenti antifrode per garantire transazioni protette.
                    </p>
                    <p class="text-muted">I tuoi dati non vengono mai memorizzati sui nostri server.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">📅 Tempistiche di addebito</h4>
                    <p>
                        Il pagamento viene addebitato immediatamente dopo la conferma dell'acquisto o della vincita dell'asta.
                    </p>
                    <p class="text-muted">Riceverai una notifica e una fattura dopo ogni pagamento.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">📄 Fatturazione</h4>
                    <p>
                        Ogni transazione genera automaticamente una fattura, inviata alla tua email e disponibile nel tuo profilo.
                    </p>
                    <p class="text-muted">Controlla la sezione "I miei acquisti" per lo storico completo.</p>
                </div>
            </div>

            <div class="col-12">
                <div class="p-4 border rounded-3 shadow-sm bg-light text-center">
                    <h4 class="mb-3 text-antiqua">❓ Hai bisogno di assistenza?</h4>
                    <p>
                        Il nostro <a href="{{ route('contatti') }}" class="text-decoration-underline text-antiqua">servizio clienti</a> è sempre disponibile per domande, problemi o chiarimenti sui metodi di pagamento.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>
    </div>

    <style>
        .text-antiqua {
            color: #ff6600;
        }
        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
