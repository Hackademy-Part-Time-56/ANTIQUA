<x-layout>
    <x-category-navigation />
    <div class="container-fluid text-center">
        @auth
            <div class="publish-section">
                <div class="container">
                    <div class="publish-banner">
                        <div class="banner-content">
                            <h3 class="banner-title">{{ __('ui.startselling') }}</h3>
                            <p class="banner-subtitle">{{ __('ui.reachmillionsofinterestedbuyers') }}</p>
                        </div>
                        <a href="{{ route('create.article') }}" class="publish-button">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span>{{ __('ui.postanad') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        @endauth
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 col-lg-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{ __('ui.noarticleshavebeencreatedyet') }}
                    </h3>
                </div>
            @endforelse
        </div>
</x-layout>