<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-antiqua">{{ __('ui.paymenton') }}</h1>
            <p class="lead text-muted">{{ __('ui.paymentdesc') }}</p>
        </div>

        <div class="row g-5">
            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">💳 {{ __('ui.paymentmethods') }}</h4>
                    <ul class="list-unstyled">
                        <li>✅ {{ __('ui.1') }}</li>
                        <li>✅ {{ __('ui.2') }}</li>
                        <li>✅ {{ __('ui.3') }}</li>
                        <li>✅ {{ __('ui.4') }}</li>
                    </ul>
                    <p class="text-muted mt-3">{{ __('ui.5') }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">🔒 {{ __('ui.securitypayments') }}</h4>
                    <p>
                        {{ __('ui.securitypaymentdesc') }}
                    </p>
                    <p class="text-muted">{{ __('ui.nosave') }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">📅 {{ __('ui.chargetimes') }}</h4>
                    <p>
                        {{ __('ui.chargetimesdesc') }}
                    </p>
                    <p class="text-muted">{{ __('ui.chargetimesdesc2') }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 border rounded-3 shadow-sm h-100 bg-light">
                    <h4 class="mb-3 text-antiqua">📄 {{ __('ui.billing') }}</h4>
                    <p>
                        {{ __('ui.billingdesc') }}
                    </p>
                    <p class="text-muted">{{ __('ui.billingdesc2') }}</p>
                </div>
            </div>

            <div class="col-12">
                <div class="p-4 border rounded-3 shadow-sm bg-light text-center">
                    <h4 class="mb-3 text-antiqua">❓ {{ __('ui.billingdesc3') }}</h4>
                    <p>
                        {{ __('ui.billingdesc4') }} <a href="{{ route('contatti') }}" class="text-decoration-underline text-antiqua">{{ __('ui.billingdesc5') }}</a> {{ __('ui.billingdesc6') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{ __('ui.backhome') }}
            </a>
        </div>
    </div>

    <style>
        .text-antiqua {
            color: #ff6600;
        }
        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
