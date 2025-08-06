<x-layout>


<div class="container py-5">
    <h1 class="mb-4">{{ __('ui.h1') }}</h1>

    <p>
       {{ __('ui.firstparagraph') }}
    </p>

    <h2 class="mt-5">{{ __('ui.h2') }}</h2>

    <p>
       {{ __('ui.secondparagraph') }}
    </p>

    <ul>
        <li>{{ __('ui.why') }}</li>
        <li>{{ __('ui.why1') }}</li>
        <li>{{ __('ui.why2') }}</li>
        <li>{{ __('ui.why3') }}</li>
    </ul>

    <h2 class="mt-5">{{ __('ui.h2.1') }}</h2>
    <p>
        {{ __('ui.thirdparagraph') }}
    </p>

    <h2 class="mt-5">{{ __('ui.h2.2') }}</h2>
    <p>
        {{ __('ui.fourthparagraph') }}
    </p>

    <h2 class="mt-5">{{ __('ui.h2.3') }}</h2>
    <p>
        {{ __('ui.fifthparagraph') }}
    </p>

    </p>
    <ul>
        <li>{{ __('ui.subct1') }}</li>
        <li>{{ __('ui.subct2') }}</li>
        <li>{{ __('ui.subct3') }}</li>
        <li>{{ __('ui.subct4') }}</li>
        <li>{{ __('ui.subct5') }}</li>
    </ul>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{__('ui.backhome')}}
            </a>
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