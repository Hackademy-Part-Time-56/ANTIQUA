<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#ff6600;">Informativa sulla Privacy</h1>
            <p class="lead">La tua privacy è importante per noi. Scopri come ANTIQUA gestisce i tuoi dati personali.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">🔐 Raccolta dei dati</h5>
                        <p class="card-text">
                            Raccogliamo solo i dati necessari per offrirti un servizio personalizzato e sicuro:
                            nome, email, indirizzo di spedizione, informazioni di pagamento e cronologia ordini.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">📊 Utilizzo dei dati</h5>
                        <p class="card-text">
                            Utilizziamo i tuoi dati per gestire gli ordini, migliorare l'esperienza utente,
                            fornire supporto e inviarti aggiornamenti importanti o promozioni, solo se hai dato il consenso.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">👥 Condivisione dei dati</h5>
                        <p class="card-text">
                            Non vendiamo i tuoi dati. Li condividiamo solo con fornitori fidati (es. corrieri o pagamenti)
                            esclusivamente per completare i tuoi ordini o servizi richiesti.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">🛡️ Sicurezza</h5>
                        <p class="card-text">
                            Proteggiamo i tuoi dati con misure tecniche e organizzative avanzate.
                            I tuoi dati sono conservati in ambienti sicuri e accessibili solo a personale autorizzato.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">🧾 I tuoi diritti</h5>
                        <p class="card-text">
                            Puoi accedere, modificare o eliminare i tuoi dati in qualsiasi momento. Hai anche diritto alla portabilità
                            dei dati e a revocare il consenso in ogni momento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">📅 Conservazione dei dati</h5>
                        <p class="card-text">
                            Conserviamo i tuoi dati solo per il tempo necessario a fornire i servizi e adempiere agli obblighi legali.
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

    <style>
        .text-orange {
            color: #ff6600;
        }
        .card-title {
            font-size: 1.2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }
        .card-text {
            color: #444;
            line-height: 1.6;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
