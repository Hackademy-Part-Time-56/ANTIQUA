<x-layout>
    <div class="container my-5">

        <!-- Titolo -->
        <section class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#4B3B2B;">{{ __('ui.howitworks') }} <span style="color:#ff6600;">ANTIQUA</span></h1>
            <p class="lead text-center mb-5">
                {{ __('ui.howitworksdesc') }}
            </p>
        </section>

        <!-- Card Grid con 3 per riga -->
        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🎨</div>
                    <h4 class="fw-semibold mb-2">{{__('ui.discoverunique1')}}</h4>
                    <p>{{__('ui.discoverunique2')}}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">⏰</div>
                    <h4 class="fw-semibold mb-2">{{__('ui.participate')}}</h4>
                    <p>{{ __('ui.offer') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">💼</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.sellwith') }}</h4>
                    <p>{{ __('ui.sellwithdesc') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🔒</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.security1') }}</h4>
                    <p>{{ __('ui.securitydesc') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🤝</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.security2') }}</h4>
                    <p>{{ __('ui.securitydesc2') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">📦</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.secureshipping') }}</h4>
                    <p>{{ __('ui.shippingdesc') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">💡</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.expert') }}</h4>
                    <p>{{ __('ui.valutation') }}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">🌍</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.globalmarket') }}</h4>
                    <p>{{ __('ui.globalmarketdesc') }}</p>
                </div>
            </div>

            <!-- Ottava skill -->
            <div class="col-md-4">
                <div class="feature-box p-4 shadow-sm rounded bg-light text-center h-100">
                    <div class="icon mb-3" style="font-size: 3rem; color: #A87C4E;">✅</div>
                    <h4 class="fw-semibold mb-2">{{ __('ui.authenticityguarantee') }}</h4>
                    <p>{{ __('ui.authenticityguaranteedesc') }}</p>
                </div>
            </div>

        </div>

        <!-- Bottone torna alla home -->
        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{ __('ui.backhome') }}
            </a>
        </div>
        
    </div>

    <style>
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
