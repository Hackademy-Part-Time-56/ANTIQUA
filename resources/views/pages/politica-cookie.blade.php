<x-layout>
    <div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold" style="color:#ff6600;">Politica sui Cookie</h1>
        <p class="lead">La privacy del tuo browser è importante per noi. Leggi come gestiamo i cookie su ANTIQUA.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">🍪 Cosa sono i cookie?</h5>
            <p class="card-text">
                I cookie sono piccoli file di testo memorizzati sul tuo dispositivo usati per riconoscerti, ricordare preferenze e migliorare la tua esperienza di navigazione. Utilizziamo anche tecnologie simili come web beacon o fingerprinting.</p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">🕒 Durata dei cookie</h5>
            <p class="card-text">
                Alcuni cookie restano attivi solo per la sessione di navigazione, altri persistono più a lungo sul tuo dispositivo.</p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">⚙️ Tipologie di cookie</h5>
            <p class="card-text">
                Usiamo cookie funzionali per la navigazione, cookie analytics per comprendere l’uso del sito, e cookie di marketing per proporre contenuti rilevanti. Alcuni cookie di queste categorie sono gestiti da terze parti.</p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">✅ Cookie funzionali (necessari)</h5>
            <p class="card-text">
                Questi cookie garantiscono funzioni essenziali del sito – come mantenere il login o preferenze utente – e non possono essere disattivati.</p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">📈 Cookie di analisi</h5>
            <p class="card-text">
                Raccogliamo dati aggregati sulle visite al sito per capire come migliorare i contenuti e l’esperienza utente.</p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">📣 Cookie di marketing</h5>
            <p class="card-text">
                Utilizziamo cookie per mostrare annunci pertinenti basati sui tuoi interessi. Questi possono essere impostati anche da servizi di terze parti.</p>
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
        margin-bottom: 0.5rem;
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
