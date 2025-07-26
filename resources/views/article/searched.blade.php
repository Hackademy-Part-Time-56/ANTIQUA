<x-layout>
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1">{{ __('ui.searchresults') }} <span class="fw-bold">{{ $query }}</span></h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-cente py-5">
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
        {{ $articles->links() }}
    </div>
</x-layout>