<x-layout>
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-antiqua">Sicurezza su ANTIQUA</h1>
                <p class="lead text-muted">Naviga e acquista con totale fiducia: proteggiamo ogni passo della tua esperienza.</p>
            </div>

            <div class="row g-4">
                <!-- Verifica degli oggetti -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center">
                            <div class="text-center mb-3 fs-1">🔍</div>
                            <h5 class="card-title text-antiqua">Oggetti verificati</h5>
                            <p class="card-text">
                                I nostri esperti valutano ogni oggetto prima della pubblicazione. Acquisti autentici e certificati.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pagamenti sicuri -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center">
                            <div class="text-center mb-3 fs-1">💳</div>
                            <h5 class="card-title text-antiqua">Pagamenti protetti</h5>
                            <p class="card-text">
                                Usiamo sistemi di pagamento sicuri e criptati. I tuoi dati personali sono sempre protetti.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Spedizioni garantite -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center">
                            <div class="text-center mb-3 fs-1">📦</div>
                            <h5 class="card-title text-antiqua">Spedizioni affidabili</h5>
                            <p class="card-text">
                                Ogni ordine è tracciabile. Il venditore spedisce entro i termini stabiliti e puoi monitorare il tuo pacco.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Protezione acquirente -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center">
                            <div class="text-center mb-3 fs-1">🛡️</div>
                            <h5 class="card-title text-antiqua">Protezione acquirenti</h5>
                            <p class="card-text">
                                Il tuo pagamento viene trattenuto finché non ricevi il prodotto. In caso di problemi, puoi richiedere un rimborso.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Valutazioni utenti reali -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center">
                            <div class="text-center mb-3 fs-1">🌟</div>
                                <h5 class="card-title text-antiqua">Valutazioni utenti reali</h5>
                                <p class="card-text">
                                Ogni venditore è recensito dagli utenti. Le valutazioni trasparenti ti aiutano a scegliere con fiducia.
                                </p>
                            </div>
                        </div>
                    </div>


                <!-- Supporto clienti -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm bg-light">
                        <div class="card-body text-center">
                            <div class="text-center mb-3 fs-1">🤝</div>
                            <h5 class="card-title text-antiqua">Supporto sempre presente</h5>
                            <p class="card-text">
                                Hai bisogno di aiuto? Il nostro <a href="{{ route('contatti') }}" class="text-decoration-underline text-antiqua">servizio clienti</a> è a tua disposizione per ogni richiesta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                    ⬅ Torna alla Home
                </a>
            </div>
        </div>
    </section>

    <style>
        .text-antiqua {
            color: #ff6600;
        }

        .text-antiqua:hover {
            color: #ff6600;
        }

        .card-title {
            font-weight: 600;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
</x-layout>
