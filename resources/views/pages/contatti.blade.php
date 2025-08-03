
<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h1 class="mb-4 text-primary fw-bold">Contatti</h1>
                <p class="lead mb-5">Benvenuto nella pagina dei contatti di <strong>ANTIQUA</strong>.</p>

                <p class="mb-4">Se hai domande, suggerimenti o vuoi metterti in contatto con noi, ecco come fare:</p>

                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <h2 class="h4 mb-3 text-secondary">Indirizzo</h2>
                        <p class="mb-4">
                            Via Antiqua, 123<br>
                            00100 Roma, Italia
                        </p>

                        <h2 class="h4 mb-3 text-secondary">Telefono</h2>
                        <p class="mb-4">+39 06 1234567</p>

                        <h2 class="h4 mb-3 text-secondary">Email</h2>
                        <p class="mb-4">info@antiqua.com</p>

                        <h2 class="h4 mb-3 text-secondary">Orari di apertura</h2>
                        <ul class="list-unstyled ps-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Lunedì - Venerdì: 9:00 - 18:00</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Sabato: 10:00 - 14:00</li>
                            <li><i class="bi bi-x-circle-fill text-danger me-2"></i>Domenica: Chiuso</li>
                        </ul>
                    </div>
                </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                ⬅ Torna alla Home
            </a>
        </div>
            </div>
        </div>
    </div>

    <style>
        h1, h2 {
            color: #ff6600;
        }

    </style>
</x-layout>

