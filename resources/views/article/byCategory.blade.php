<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">{{ __('ui.artthiscategory') }} <span
                        class="fst-italic fw-bold">{{$category->name}}</span></h1>
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
                <div class="col-12 text-center">
                    <h3>
                        {{ __('ui.noartforthiscat') }}
                    </h3>
                    @auth
                        <a class="btn btn-dark my-5" href="{{route('create.article')}}">{{ __('ui.pubarticle') }}</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>