<x-layout>
    <header style="padding: 3rem 2rem; text-align: center; color: #ff6600; margin-bottom: 2rem;">
        <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem; font-family: Georgia, serif;">{{__('ui.workwithantiqua')}}</h1>
        <p style="font-size: 1.1rem; max-width: 700px; margin: 0 auto; font-family: Georgia, serif;">
            {{__('ui.joinaproject')}}
        </p>
    </header>

    <section class="jobs text-center" style="padding: 0 2rem; max-width: 1100px; margin: 0 auto 3rem auto; color: #ff6600;">
        <div class="row">
            @foreach([
                [
                    'titolo' => __('ui.responscat'),
                    'localita' => __('ui.remote'),
                    'tipo' => __('ui.pt'),
                    'descrizione' => __('ui.jobdescription')
                ],
                [
                    'titolo' => __('ui.antiquesconsultant'),
                    'localita' => __('ui.lt'),
                    'tipo' => __('ui.collaboration'),
                    'descrizione' => __('ui.supportclients')
                ],
                [
                    'titolo' => __('ui.backenddeveloper'),
                    'localita' => __('ui.lt1'),
                    'tipo' => __('ui.fulltime'),
                    'descrizione' => __('ui.desc')
                ]
            ] as $job)
            <div class="col-md-4 mb-3">
                <div class="job-card bg-light text-center" style="padding: 1.5rem; border-radius: 8px; border: 1px solid #ddd;">
                    <h3 style="color: #333; margin-top: 0; font-family: Georgia, serif;">{{ $job['titolo'] }}</h3>
                    <p><strong>{{ __('ui.loc') }}</strong> {{ $job['localita'] }}</p>
                    <p><strong>{{ __('ui.type') }}</strong> {{ $job['tipo'] }}</p>
                    <p>{{ $job['descrizione'] }}</p>
                    <a href="#form-candidatura" style="background: #333; color: #fff; padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; display: inline-block; margin-top: 0.5rem;">{{ __('ui.applynow') }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="form-candidatura" style="background: #fff; padding: 3rem 2rem; max-width: 700px; margin: 0 auto 4rem auto; border-radius: 8px; border: 1px solid #ddd;">
        <h2 style="font-family: Georgia, serif;">{{ __('ui.spontaneousapplication') }}</h2>
        <p style="font-family: Georgia, serif;">
            {{ __('ui.notpos') }}
        </p>

        <form method="POST" action="{{route('become.revisor')}}">
            @csrf

            <label for="nome" style="margin-top:1rem; font-weight:bold;">{{ __('ui.nc') }}</label>
            <input type="text" id="nome" name="nome" required style="padding: 0.8rem; margin-top: 0.3rem; border-radius: 4px; border: 1px solid #ccc; width: 100%;">

            <label for="email" style="margin-top:1rem; font-weight:bold;">{{ __('ui.email:') }}</label>
            <input type="email" id="email" name="email" required style="padding: 0.8rem; margin-top: 0.3rem; border-radius: 4px; border: 1px solid #ccc; width: 100%;">

            <label for="ruolo" style="margin-top:1rem; font-weight:bold;">{{ __('ui.ri') }}</label>
            <input type="text" id="ruolo" name="ruolo" style="padding: 0.8rem; margin-top: 0.3rem; border-radius: 4px; border: 1px solid #ccc; width: 100%;">

            <label for="cv" style="margin-top:1rem; font-weight:bold;">{{ __('ui.link') }}</label>
            <input type="url" id="cv" name="cv" style="padding: 0.8rem; margin-top: 0.3rem; border-radius: 4px; border: 1px solid #ccc; width: 100%;">

            <label for="messaggio" style="margin-top:1rem; font-weight:bold;">{{ __('ui.mex') }}</label>
            <textarea id="messaggio" name="messaggio" rows="5" placeholder="Parlaci un po' di te..." style="padding: 0.8rem; margin-top: 0.3rem; border-radius: 4px; border: 1px solid #ccc; width: 100%;"></textarea>

            <button type="submit" style="margin-top: 1.5rem; background: #333; color: #fff; padding: 0.8rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">
                {{ __('ui.sendapplication') }}
            </button>
        </form>

        @if(session('success'))
            <p style="color: green; margin-top: 1rem;">{{ session('success') }}</p>
        @endif
    </section>

    <div class="text-center mt-5 mb-5">
        <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
            {{ __('ui.backhome') }}
        </a>
    </div>

    <style>
        p {
            color: #ff6600;
        }

        .btn-outline-dark:hover {
            background-color: #ff6600;
            color: white;
            border-color: #ff6600;
        }
    </style>
</x-layout>
