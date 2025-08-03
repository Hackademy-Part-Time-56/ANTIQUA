<x-layout>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h1 class="display-4" style="color:#ff6600" >Aiuto & Supporto</h1>
            <p class="lead text-muted">Benvenuto nella pagina di assistenza di <strong>ANTIQUA</strong>. Qui troverai risposte alle domande più frequenti e informazioni utili per usare al meglio il nostro servizio.</p>
        </div>

        <!-- Sezione Come Funziona -->
        <section class="row mb-5">
            <div class="col-md-6">
                <h2 style="color:#ff6600">Come funziona <strong>ANTIQUA</strong>?</h2>
                <p class="text-muted">ANTIQUA è la piattaforma online per scoprire, acquistare e vendere oggetti d’antiquariato unici e autentici. Ti offriamo un'esperienza semplice, sicura e trasparente.</p>
            </div>
            <div class="col-md-6">
            
            </div>
        </section>

        <!-- Sezione Domande Frequenti -->
        <section class="mb-5">
            <h2 style="color:#ff6600">Domande frequenti</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><strong>Come posso registrarmi?</strong><br>Per creare un account, clicca su <em>Registrati</em> in alto a destra e compila il modulo con i tuoi dati.</li>
                        <li><strong>Come funziona l’acquisto?</strong><br>Puo scegliere un articolo e fare la tua offerta o acquistarlo direttamente.</li>
                        <li><strong>Come posso vendere i miei oggetti?</strong><br>Registrati come venditore e segui la procedura per mettere in vendita i tuoi articoli.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><strong>Quali metodi di pagamento sono accettati?</strong><br>Accettiamo pagamenti tramite carta di credito, PayPal e bonifico bancario.</li>
                        <li><strong>Come posso contattare l’assistenza?</strong><br>Puoi scriverci tramite la pagina <a href="{{ route('contatti') }}">Contatti</a> o inviare una mail a <a href="mailto:supporto@antiqua.com">supporto@antiqua.com</a>.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sezione Norme e Regolamenti -->
        <section class="mb-5">
            <h2 style="color:#ff6600">Norme e regolamenti</h2>
            <p class="text-muted">Ti invitiamo a leggere attentamente i nostri <a href="temini-condizioni" class="text-decoration-none">Termini e condizioni</a> e la <a href="{{ route('informativa-privacy') }}" class="text-decoration-none">Politica sulla privacy</a> per maggiori dettagli.</p>
        </section>

        <!-- Sezione Ulteriori informazioni -->
        <section class="text-center">
            <h2 style="color:#ff6600">Ulteriori informazioni</h2>
            <p class="text-muted">Se non hai trovato risposta alla tua domanda, ti consigliamo di contattare direttamente il nostro servizio clienti tramite la pagina <a href="{{ route('contatti') }}" class="text-decoration-none">Contatti</a>.</p>
        </section>

        <!-- Pulsante Torna alla Home -->
        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-lg btn-outline-primary px-5 py-3 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>

    </div>

    <style>
        h1, h2 {
            font-family: 'Roboto', sans-serif;
            color: #ff6600;
        }

        p, li {
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        .btn-outline-primary {
            border: 2px solid #ff6600;
            color: #ff6600;
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }

        .container {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section {
            margin-bottom: 40px;
        }

        .row img {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .list-unstyled li {
            margin-bottom: 15px;
        }

        .text-muted {
            color: #777;
        }

        .text-info {
            color: #ff6600;
            font-weight: 700;
        }

        .text-decoration-none {
            text-decoration: none;
            color: #ff6600;
        }

        .text-decoration-none:hover {
            text-decoration: underline;
        }
    </style>
</x-layout>
