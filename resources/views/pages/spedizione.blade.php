<x-layout>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold" style="color:#ff6600;">{{__('ui.shippingwith')}}</h1>
            <p class="lead">{{__('ui.delivery')}}</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-bold">📦 {{__('ui.packaging')}}</h5>
                        <p class="card-text">
                            {{__('ui.packagingdesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-bold">🚚 {{__('ui.shippingtime')}}</h5>
                        <p class="card-text">
                            {{__('ui.shippingtime1')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-bold">📦 {{__('ui.tracking')}}</h5>
                        <p class="card-text">
                            {{__('ui.trackingdesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-bold">💶 {{__('ui.costs')}}</h5>
                        <p class="card-text">
                            {{__('ui.costsdesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-bold">🛡️ {{__('ui.insurance')}}</h5>
                        <p class="card-text">
                            {{__('ui.insurancedesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0 bg-light text-center">
                    <div class="card-body">
                        <h5 class="card-title text-orange fw-bold">❗ {{__('ui.deliveryissues')}}</h5>
                        <p class="card-text">
                            {{__('ui.deliveryissuesdesc')}} <a href="{{ route('contatti') }}">{{__('ui.deliveryissuesdesc2')}}</a>.
                            {{__('ui.deliveryissuesdesc3')}}
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
            margin-bottom: 1rem;
        }
        .card-text {
            color: #444;
        }
        a {
            color: #ff6600;
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
