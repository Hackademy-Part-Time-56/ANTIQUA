<x-layout>
<div class="container my-5">
    <h1 class="mb-4">{{ __('ui.h1s') }}</h1>

    <p>{{ __('ui.descriptionof') }} <strong>Antiqua</strong>. {{ __('ui.hereyoucanfind') }}</p>

    <h2 class="mt-5">{{ __('ui.whois') }}</h2>
    <p>{{ __('ui.whoisdesc') }}</p>

    <h2 class="mt-5">{{ __('ui.presscontacts') }}</h2>
    <p>{{ __('ui.presscontactsdesc') }}</p>
    <p><strong>{{ __('ui.emailgrass') }}</strong> press@antiqua.com</p>

    <h2 class="mt-5">{{ __('ui.pressmaterial') }}</h2>
    <ul>
        <li>{{ __('ui.pressreleases') }}</li>
        <li>{{ __('ui.officiallogos') }}</li>
        <li>{{ __('ui.highresimages') }}</li>
        <li>{{ __('ui.informationon') }}</li>
    </ul>

    <p class="mt-4">{{ __('ui.presskit') }}</p>

    <h2 class="mt-5">{{ __('ui.stayupdated') }}</h2>
    <p>{{ __('ui.followus') }}</p>

    <p class="mt-5"><em>{{ __('ui.lastupdated') }}</em></p>
</div>

        <div class="text-center mt-5 mb-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{ __('ui.backhome') }}
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