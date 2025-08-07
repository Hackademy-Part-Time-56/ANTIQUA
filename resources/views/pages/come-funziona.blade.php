<x-layout>
    <div class="container my-5">

        <h1 class="mb-4 text-center fw-bold" style="color:#4B3B2B;">{{ __('ui.howitworks') }} <span style="color:#ff6600;">ANTIQUA</span></h1>

        <p class="lead text-center mb-5">
            {{ __('ui.howitworksdesc') }}
        </p>

        <div class="row g-4">

            @php
                $features = [
                    ['icon' => '🎨', 'title' => __('ui.discoverunique1'), 'text' => __('ui.discoverunique2')],
                    ['icon' => '⏰', 'title' => __('ui.participate'), 'text' => __('ui.offer')],
                    ['icon' => '💼', 'title' => __('ui.sellwith'), 'text' => __('ui.sellwithdesc')],
                    ['icon' => '🔒', 'title' => __('ui.security1'), 'text' => __('ui.securitydesc')],
                    ['icon' => '🤝', 'title' => __('ui.security2'), 'text' => __('ui.securitydesc2')],
                    ['icon' => '📦', 'title' => __('ui.secureshipping'), 'text' => __('ui.shippingdesc')],
                ];
            @endphp

            @foreach ($features as $feature)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 bg-light">
                        <div class="card-body text-center">
                            <div class="display-4 mb-3" style="color:#A87C4E;">{{ $feature['icon'] }}</div>
                            <h5 class="card-title fw-semibold" style="color:#4B3B2B;">{{ $feature['title'] }}</h5>
                            <p class="card-text">{{ $feature['text'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('homepage') }}" class="btn btn-outline-dark px-4 py-2 rounded-pill">
                {{ __('ui.backhome') }}
            </a>
        </div>

    </div>

    <style>
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
