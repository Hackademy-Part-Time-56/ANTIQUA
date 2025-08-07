
<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h1 class="mb-4 text-primary fw-bold">{{ __('ui.contacth1') }}</h1>
                <p class="lead mb-5">{{ __('ui.contactdesc') }} <strong>ANTIQUA</strong>.</p>

                <p class="mb-4">{{ __('ui.contactinfo') }}</p>

                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <h2 class="h4 mb-3 text-secondary">{{ __('ui.address') }}</h2>
                        <p class="mb-4">
                            Via Antiqua, 123<br>
                            00100 Roma, Italia
                        </p>

                        <h2 class="h4 mb-3 text-secondary">{{ __('ui.phonenum') }}</h2>
                        <p class="mb-4">+39 06 1234567</p>

                        <h2 class="h4 mb-3 text-secondary">{{ __('ui.email:') }}</h2>
                        <p class="mb-4">info@antiqua.com</p>

                        <h2 class="h4 mb-3 text-secondary">{{ __('ui.openinghours') }}</h2>
                        <ul class="list-unstyled ps-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>{{ __('ui.openinghoursinfo') }}</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>{{ __('ui.openinghoursinfo1') }}</li>
                            <li><i class="bi bi-x-circle-fill text-danger me-2"></i>{{ __('ui.openinghoursinfo2') }}</li>
                        </ul>
                    </div>
                </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{ __('ui.backhome') }}
            </a>
        </div>
            </div>
        </div>
    </div>

    <style>
        h1, h2 {
            color: #ff6600;
        }
        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }

    </style>
</x-layout>

