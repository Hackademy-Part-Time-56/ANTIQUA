<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4" pt-5>
                    Registrati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-item-center height-custom">
            <div class="col-12 col-md-6">
                <form action="{{route('register')}}" method="post" class="bg-body-tertiary shadow rounded p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" id="registerEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma la password:</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>