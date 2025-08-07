<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#ff6600;">{{ __('ui.privacypolicy') }}</h1>
            <p class="lead">{{ __('ui.privacypolicydesc') }}</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">🔐 {{ __('ui.datacollection') }}</h5>
                        <p class="card-text">
                            {{ __('ui.datacollectiondesc') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">📊 {{ __('ui.useofdata') }}</h5>
                        <p class="card-text">
                            {{ __('ui.useofdatadesc') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">👥 {{ __('ui.datasharing') }}</h5>
                        <p class="card-text">
                            {{ __('ui.datasharingdesc') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">🛡️ {{ __('ui.security') }}</h5>
                        <p class="card-text">
                            {{ __('ui.sec') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">🧾 {{ __('ui.yourrights') }}</h5>
                        <p class="card-text">
                            {{ __('ui.yourrightsdesc') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-semibold">📅 {{ __('ui.datastorage') }}</h5>
                        <p class="card-text">
                            {{ __('ui.datastoragedesc') }}
                        </p>
                    </div>
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
        .text-orange {
            color: #ff6600;
        }
        .card-title {
            font-size: 1.2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }
        .card-text {
            color: #444;
            line-height: 1.6;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
