<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#ff6600;">Note Legali</h1>
            <p class="lead">Trasparenza, responsabilità e tutela degli utenti su ANTIQUA.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-light text-center">
                        <h5 class="card-title text-orange">⚖️ Identità del Titolare</h5>
                        <p class="card-text">
                            Il sito ANTIQUA è gestito da Antiqua S.r.l., con sede legale in Via delle Arti 15, 00100 Roma, Italia.
                            P.IVA: 01234567890 – REA: RM-123456.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">📜 Proprietà Intellettuale</h5>
                        <p class="card-text">
                            Tutti i contenuti pubblicati su ANTIQUA – testi, immagini, loghi, marchi e layout – sono protetti da copyright
                            e non possono essere copiati o riprodotti senza autorizzazione scritta.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">📦 Responsabilità</h5>
                        <p class="card-text">
                            Pur garantendo la massima accuratezza dei contenuti, ANTIQUA non è responsabile di eventuali errori o
                            inesattezze. I contenuti informativi non costituiscono impegno contrattuale.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">🔗 Link Esterni</h5>
                        <p class="card-text">
                            Il sito può contenere link a siti esterni non controllati da ANTIQUA. Non siamo responsabili per i contenuti
                            di tali siti o per eventuali danni derivanti dalla loro consultazione.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">🔒 Privacy e Cookie</h5>
                        <p class="card-text">
                            Per maggiori informazioni sul trattamento dei dati personali e sull’uso dei cookie, visita le nostre pagine:
                            <a href="{{ route('informativa-privacy') }}">Privacy</a> e <a href="{{ route('politica-cookie') }}">Cookie Policy</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">📧 Contatti legali</h5>
                        <p class="card-text">
                            Per comunicazioni ufficiali, puoi scriverci a <a href="mailto:legal@antiqua.com">legal@antiqua.com</a>.
                            Ti risponderemo il prima possibile.
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
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            color: #444;
            line-height: 1.6;
        }
        a {
            color: #ff6600;
        }
        a:hover {
            text-decoration: underline;
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
