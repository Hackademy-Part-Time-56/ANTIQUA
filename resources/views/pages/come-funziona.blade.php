<x-layout>
    <div class="container my-5">

        <h1 class="mb-4 text-center fw-bold" style="color:#4B3B2B;">Come funziona <span style="color:#ff6600;">ANTIQUA</span></h1>

        <p class="lead text-center mb-5">
            Scopri come acquistare, vendere e vivere il mondo dell’arte e dell’antiquariato in modo semplice e sicuro.
        </p>

        <div class="row g-4">

            @php
                $features = [
                    ['icon' => '🎨', 'title' => 'Scopri oggetti unici', 'text' => 'Esplora aste online con pezzi rari, selezionati da esperti, pronti a trovare una nuova casa.'],
                    ['icon' => '⏰', 'title' => 'Partecipa alle aste', 'text' => 'Registrati e fai offerte in tempo reale per aggiudicarti i tuoi oggetti preferiti.'],
                    ['icon' => '💼', 'title' => 'Vendi con facilità', 'text' => 'Metti in vendita i tuoi pezzi d’arte con il supporto del nostro team di esperti.'],
                    ['icon' => '🔒', 'title' => 'Sicurezza e affidabilità', 'text' => 'Acquista e vendi con la certezza di transazioni sicure e controlli rigorosi.'],
                    ['icon' => '🤝', 'title' => 'Assistenza dedicata', 'text' => 'Il nostro supporto è sempre disponibile per guidarti in ogni fase.'],
                    ['icon' => '📦', 'title' => 'Spedizioni sicure', 'text' => 'Gestiamo con cura e tracciabilità ogni spedizione per garantire che il tuo acquisto arrivi in perfette condizioni.'],
                ];
            @endphp

            @foreach ($features as $feature)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 bg-light">
                        <div class="card-body text-center">
                            <div class="display-4 mb-3" style="color:#A87C4E;">{{ $feature['icon'] }}</div>
                            <h5 class="card-title fw-semibold" style="color:#4B3B2B;">{{ $feature['title'] }}</h5>
                            <p class="card-text">{{ $feature['text'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>

    </div>

    <style>
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
