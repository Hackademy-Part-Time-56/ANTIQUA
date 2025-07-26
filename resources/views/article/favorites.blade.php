<x-layout>
    <div class="container">
        <h2 class="mb-4">I tuoi articoli preferiti</h2>
        <div class="row">
            @forelse($articles as $article)
                <div class="col-md-4 mb-4">
                    @component('components.card', ['article' => $article])
                    @endcomponent
                </div>
            @empty
                <p>Non hai ancora aggiunto articoli ai preferiti.</p>
            @endforelse
        </div>
    </div>
</x-layout>
