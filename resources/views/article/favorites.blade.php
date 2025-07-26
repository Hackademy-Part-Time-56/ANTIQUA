<x-layout>
    <div class="container">
        <h2 class="mb-4">{{ __('ui.yourfav') }}</h2>
        <div class="row">
            @forelse($articles as $article)
                <div class="col-md-4 mb-4">
                    @component('components.card', ['article' => $article])
                    @endcomponent
                </div>
            @empty
                <p>{{ __('ui.havenotadded') }}</p>
            @endforelse
        </div>
    </div>
</x-layout>
