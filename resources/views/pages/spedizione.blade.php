<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#8B5E3C;">Spedizione con ANTIQUA</h1>
            <p class="lead">Consegna sicura, tracciabile e assicurata per ogni tuo acquisto.</p>
        </div>

        <div class="row gy-4">
            <div class="col-md-6 bg-light">
                <h4 class="fw-semibold">📦 Imballaggio professionale</h4>
                <p>
                    Ogni oggetto è imballato con cura da esperti per garantire che arrivi in condizioni perfette.
                    Usiamo materiali resistenti e protezioni su misura.
                </p>
            </div>

            <div class="col-md-6 bg-light">
                <h4 class="fw-semibold">🚚 Tempi di spedizione</h4>
                <p>
                    Spedizione entro 3-5 giorni lavorativi dopo il pagamento. I tempi di consegna variano da 5 a 10 giorni lavorativi,
                    a seconda della destinazione.
                </p>
            </div>

            <div class="col-md-6 bg-light">
                <h4 class="fw-semibold">📦 Corrieri e tracciabilità</h4>
                <p>
                    Collaboriamo con corrieri affidabili come DHL, UPS e Poste Italiane.
                    Ogni spedizione è tracciabile tramite codice che ti verrà inviato via email.
                </p>
            </div>

            <div class="col-md-6 bg-light">
                <h4 class="fw-semibold">💶 Costi di spedizione</h4>
                <p>
                    Il costo viene calcolato in base al peso, dimensioni e destinazione.
                    Troverai il costo esatto durante il checkout, senza sorprese.
                </p>
            </div>

            <div class="col-md-6 bg-light">
                <h4 class="fw-semibold">🛡️ Assicurazione inclusa</h4>
                <p>
                    Tutti gli articoli spediti tramite ANTIQUA sono coperti da assicurazione.
                    In caso di danneggiamento o smarrimento, ti garantiamo il rimborso o una soluzione rapida.
                </p>
            </div>

            <div class="col-md-6 bg-light">
                <h4 class="fw-semibold">❗ Problemi con la consegna?</h4>
                <p>
                    Contattaci subito tramite <a href="{{ route('contatti') }}">la nostra pagina contatti</a>.
                    Il nostro team è sempre disponibile per supportarti.
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>
    </div>

    <style>
        h4 {
            color: #ff6600;
            border-bottom: 1px solid #ddd;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        p {
            color: #444;
            line-height: 1.6;
        }
        a {
            color: #ff6600;
            text-decoration: underline;
        }
    </style>
</x-layout>
