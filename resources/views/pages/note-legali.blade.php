<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color:#ff6600;">{{ __('ui.legalnotices') }}</h1>
            <p class="lead">{{__('ui.legalnotesdesc')}}</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-light text-center">
                        <h5 class="card-title text-orange">⚖️ {{__('ui.owneridentity')}}</h5>
                        <p class="card-text">
                            {{__('ui.owneridentitydesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">📜 {{__('ui.intellectualproperty')}}</h5>
                        <p class="card-text">
                            {{__('ui.intellectualpropertydesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">📦 {{__('ui.responsibility')}}</h5>
                        <p class="card-text">
                            {{__('ui.responsibilitydesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">🔗 {{__('ui.externallinks')}}</h5>
                        <p class="card-text">
                            {{__('ui.externallinksdesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">🔒 {{__('ui.privacyandcookies')}}</h5>
                        <p class="card-text">
                            {{__('ui.privacyandcookiesdesc')}}
                            <a href="{{ route('informativa-privacy') }}">{{__('ui.privacy')}}</a> e <a href="{{ route('politica-cookie') }}">{{__('ui.cookie')}}</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange">📧 {{__('ui.legalcontact')}}</h5>
                        <p class="card-text">
                            {{__('ui.legalcontactdesc')}} <a href="mailto:legal@antiqua.com">legal@antiqua.com</a>.
                            {{__('ui.legalcontactdesc1')}}
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
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            color: #444;
            line-height: 1.6;
        }
        a {
            color: #ff6600;
        }
        a:hover {
            text-decoration: underline;
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
