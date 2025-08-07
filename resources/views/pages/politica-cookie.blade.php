<x-layout>
    <div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold" style="color:#ff6600;">{{ __('ui.cookiepolicy') }}</h1>
        <p class="lead">{{ __('ui.cookiepolicydesc') }}</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">🍪 {{ __('ui.whatarecookies') }}</h5>
            <p class="card-text">
                {{ __('ui.whatarecookiesdesc') }}
            </p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">🕒 {{ __('ui.cookieduration') }}</h5>
            <p class="card-text">
                {{ __('ui.cookiedurationdesc') }}
            </p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">⚙️ {{ __('ui.cookietypes') }}</h5>
            <p class="card-text">
                {{ __('ui.cookietypesdesc') }}
            </p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">✅ {{ __('ui.necessarycookies') }}</h5>
            <p class="card-text">
                {{ __('ui.necessarycookiesdesc') }}
            </p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">📈 {{ __('ui.analyticscookies') }}</h5>
            <p class="card-text">
                {{ __('ui.analyticscookiesdesc') }}
            </p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card shadow-sm h-100 bg-light text-center">
            <div class="card-body">
            <h5 class="card-title text-orange">📣 {{ __('ui.marketingcookies') }}</h5>
            <p class="card-text">
                {{ __('ui.marketingcookiesdesc') }}
            </p>
            </div>
        </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
        {{__('ui.backhome')}}
        </a>
    </div>
    </div>

    <style>
    .text-orange {
        color: #ff6600;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
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
