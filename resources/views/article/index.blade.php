<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-1">{{ __('ui.allarticles') }}</h1>
            </div>
        </div>
        <!-- Go Back Button -->
        <div class="container mt-3 d-flex justify-content-center p-5 d-md-none">
            <a href="javascript:history.back()" class="btn customcolor customoutline">
                <i class="fas fa-arrow-left"></i> {{ __('ui.back') }}
            </a>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{ __('ui.noarticlescreated') }}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>