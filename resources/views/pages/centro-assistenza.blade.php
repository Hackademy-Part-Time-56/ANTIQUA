<x-layout>
    <div class="container my-5">
        <h1 class="mb-4">Aiuto &amp; Supporto</h1>
        <p>Benvenuto nella pagina di assistenza di <strong>ANTIQUA</strong>. Qui troverai risposte alle domande più frequenti e informazioni utili per usare al meglio il nostro servizio.</p>

        <section class="mb-5">
            <h2>Come funziona <strong>ANTIQUA</strong>?</h2>
            <p><strong>ANTIQUA</strong> è la piattaforma online per scoprire, acquistare e vendere oggetti d’antiquariato unici e autentici.</p>
        </section>

        <section class="mb-5">
            <h2>Domande frequenti</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Come posso registrarmi?</strong><br>
                    Per creare un account, clicca su <em>Registrati</em> in alto a destra e compila il modulo con i tuoi dati.
                </li>
                <li class="list-group-item">
                    <strong>Come funziona l’acquisto?</strong><br>
                    Puoi sfogliare le nostre aste o negozi, scegliere un articolo e fare la tua offerta o acquistarlo direttamente.
                </li>
                <li class="list-group-item">
                    <strong>Come posso vendere i miei oggetti?</strong><br>
                    Registrati come venditore e segui la procedura per mettere in vendita i tuoi articoli.
                </li>
                <li class="list-group-item">
                    <strong>Quali metodi di pagamento sono accettati?</strong><br>
                    Accettiamo pagamenti tramite carta di credito, PayPal e bonifico bancario.
                </li>
                <li class="list-group-item">
                    <strong>Come posso contattare l’assistenza?</strong><br>
                    Puoi scriverci tramite la pagina <a href="{{ route('contatti') }}">Contatti</a> o inviare una mail a <a href="mailto:supporto@antiqua.com">supporto@antiqua.com</a>.
                </li>
            </ul>
        </section>

        <section class="mb-5">
            <h2>Norme e regolamenti</h2>
            <p>Ti invitiamo a leggere attentamente i nostri <a href="">Termini e condizioni</a> e la <a href="{{ route('privacy') }}">Politica sulla privacy</a> per maggiori dettagli.</p>
        </section>

        <section>
            <h2>Ulteriori informazioni</h2>
            <p>Se non hai trovato risposta alla tua domanda, ti consigliamo di contattare direttamente il nostro servizio clienti tramite la pagina <a href="{{ route('contatti') }}">Contatti</a>.</p>
        </section>
    </div>
        <div class="text-center mt-5 mb-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>

        <style>
        h1, h2 {
            color: #ff6600;
        }

    </style>
</x-layout>
