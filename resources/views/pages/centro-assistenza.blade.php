<x-layout>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h1 class="display-4" style="color:#ff6600" >{{ __('ui.helpandsupport') }}</h1>
            <p class="lead text-muted">{{ __('ui.welcome') }} <strong>ANTIQUA</strong>. {{ __('ui.faq') }}</p>
        </div>

        <!-- Sezione Come Funziona -->
        <section class="row mb-5">
            <div class="col-md-6">
                <h2 style="color:#ff6600">{{ __('ui.howitworks') }} <strong>ANTIQUA</strong>?</h2>
                <p class="text-muted">{{ __('ui.about') }}</p>
            </div>
            <div class="col-md-6">
            
            </div>
        </section>

        <!-- Sezione Domande Frequenti -->
        <section class="mb-5">
            <h2 style="color:#ff6600">{{ __('ui.ask') }}</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><strong>{{ __('ui.howtoregister') }}</strong><br>{{ __('ui.howtoregister0') }} <em>{{ __('ui.register') }}</em> {{ __('ui.right') }}</li>
                        <li><strong>{{ __('ui.howtoregister1') }}</strong><br>{{ __('ui.howtoregister2') }}</li>
                        <li><strong>{{ __('ui.howtoregister3') }}</strong><br>{{ __('ui.howtoregister4') }}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><strong>{{ __('ui.metpay') }}</strong><br>{{ __('ui.metpay0') }}</li>
                        <li><strong>{{ __('ui.sup') }}</strong><br>{{ __('ui.sup1') }} <a href="{{ route('contatti') }}">{{ __('ui.contact') }}</a> {{ __('ui.sup2') }} <a href="mailto:supporto@antiqua.com">supporto@antiqua.com</a>.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sezione Norme e Regolamenti -->
        <section class="mb-5">
            <h2 style="color:#ff6600">{{ __('ui.regulations') }}</h2>
            <p class="text-muted">{{ __('ui.read') }} <a href="temini-condizioni" class="text-decoration-none">{{ __('ui.termsandcondition') }}</a> {{ __('ui.e') }} <a href="{{ route('informativa-privacy') }}" class="text-decoration-none">{{ __('ui.polp') }}</a> {{ __('ui.fordet') }}</p>
        </section>

        <!-- Sezione Ulteriori informazioni -->
        <section class="text-center">
            <h2 style="color:#ff6600">{{ __('ui.uinf') }}</h2>
            <p class="text-muted">{{ __('ui.notfound') }} <a href="{{ route('contatti') }}" class="text-decoration-none">{{ __('ui.contact') }}</a>.</p>
        </section>

        <!-- Pulsante Torna alla Home -->
        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-lg btn-outline-primary px-5 py-3 rounded-pill">
                {{ __('ui.backhome') }}
            </a>
        </div>

    </div>

    <style>
        h1, h2 {
            font-family: 'Roboto', sans-serif;
            color: #ff6600;
        }

        p, li {
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        .btn-outline-primary {
            border: 2px solid #ff6600;
            color: #ff6600;
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }

        .container {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section {
            margin-bottom: 40px;
        }

        .row img {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .list-unstyled li {
            margin-bottom: 15px;
        }

        .text-muted {
            color: #777;
        }

        .text-info {
            color: #ff6600;
            font-weight: 700;
        }

        .text-decoration-none {
            text-decoration: none;
            color: #ff6600;
        }

        .text-decoration-none:hover {
            text-decoration: underline;
        }
    </style>
</x-layout>
