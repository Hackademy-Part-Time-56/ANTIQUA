<x-layout>
    <div class="create-article-page">
        <!-- Go Back Button -->
        <div class="container mt-3 d-flex justify-content-center p-5 d-md-none">
            <a href="javascript:history.back()" class="btn customcolor customoutline">
                <i class="fas fa-arrow-left"></i> {{ __('ui.back') }}
            </a>
        </div>
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="hero-content">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <h1 class="hero-title">{{ __('ui.postlisting') }}</h1>
                            <p class="hero-subtitle">{{ __('ui.sellyouritems') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Form Section -->
        <div class="form-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <div class="form-card">
                            <div class="form-header">
                                <h2 class="form-title">{{ __('ui.infoitem') }}</h2>
                                <p class="form-description">{{ __('ui.alldetails') }}</p>
                            </div>

                            @livewire('create-article-form')

                            <!-- Tips Section -->
                            <div class="tips-section">
                                <h3 class="tips-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                    {{ __('ui.successfulliating') }}
                                </h3>
                                <ul class="tips-list">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('ui.high-quality') }}</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('ui.cleartitle') }}</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('ui.competitiveprice') }}</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('ui.importantdetails') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>