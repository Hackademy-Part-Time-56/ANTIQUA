<x-layout>
    <div class="container my-5">

        <!-- Titolo -->
        <section class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#4B3B2B;">Come funziona <span style="color:#ff6600;">ANTIQUA</span></h1>
            <p class="lead text-center mb-5">
                Scopri come acquistare, vendere e vivere il mondo dell’arte e dell’antiquariato in modo semplice e sicuro.
            </p>
        </section>

        <!-- Card Grid con 3 per riga -->
        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🎨</div>
                    <h4 class="fw-semibold mb-2">Scopri oggetti unici</h4>
                    <p>Esplora aste online con pezzi rari, selezionati da esperti, pronti a trovare una nuova casa.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">⏰</div>
                    <h4 class="fw-semibold mb-2">Partecipa alle aste</h4>
                    <p>Registrati e fai offerte in tempo reale per aggiudicarti i tuoi oggetti preferiti.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">💼</div>
                    <h4 class="fw-semibold mb-2">Vendi con facilità</h4>
                    <p>Metti in vendita i tuoi pezzi d’arte con il supporto del nostro team di esperti.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🔒</div>
                    <h4 class="fw-semibold mb-2">Sicurezza e affidabilità</h4>
                    <p>Acquista e vendi con la certezza di transazioni sicure e controlli rigorosi.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🤝</div>
                    <h4 class="fw-semibold mb-2">Assistenza dedicata</h4>
                    <p>Il nostro supporto è sempre disponibile per guidarti in ogni fase.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">📦</div>
                    <h4 class="fw-semibold mb-2">Spedizioni sicure</h4>
                    <p>Gestiamo con cura e tracciabilità ogni spedizione per garantire che il tuo acquisto arrivi in perfette condizioni.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">💡</div>
                    <h4 class="fw-semibold mb-2">Consigli dagli esperti</h4>
                    <p>Ricevi suggerimenti e valutazioni dai nostri specialisti per fare scelte consapevoli.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🌍</div>
                    <h4 class="fw-semibold mb-2">Mercato globale</h4>
                    <p>Acquista e vendi in tutto il mondo con facilità, raggiungendo una vasta comunità di appassionati.</p>
                </div>
            </div>

            <!-- Ottava skill -->
            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">✅</div>
                    <h4 class="fw-semibold mb-2">Garanzia di autenticità</h4>
                    <p>Verifica accurata e certificata di ogni pezzo per garantirne l’autenticità.</p>
                </div>
            </div>

        </div>

        <!-- Bottone torna alla home -->
        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>
        
    </div>

    <style>
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
