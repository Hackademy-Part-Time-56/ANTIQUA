<x-layout>
    <x-category-navigation />
    <div class="container-fluid text-center">
        @auth
            <div class="publish-section">
                <div class="container">
                    <div class="publish-banner">
                        <div class="banner-content">
                            <h3 class="banner-title">Inizia a vendere</h3>
                            <p class="banner-subtitle">Raggiungi milioni di acquirenti interessati</p>
                        </div>
                        <a href="{{ route('create.article') }}" class="publish-button">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span>Pubblica annuncio</span>
                        </a>
                    </div>
                </div>
            </div>
        @endauth
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
            @endforelse
        </div>
        
        <div class="d-flex pb-4 justify-content-around">
            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
        </div>

        <div class="d-flex pb-4 justify-content-around">
            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
            </form>

            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
            </form>
        </div>

        @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{ session('message') }}
                </div>
            </div>
        @endif

</x-layout>