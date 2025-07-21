<x-layout>
    <h1 class="text-center my-5">Benvenuto su Antiqua</h1>
    <div class="container-fluid text-center">
        <div class='row justify-content-center align-items-center vh-100'>
            <div class="col-12">
                <h1 class="display-3">Antiqua</h1>
                <div class="my-3">
                    @auth
                        <a class="btn btn-primary" href="{{ route('create.article') }}">Pubblica un articolo</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-layout>
