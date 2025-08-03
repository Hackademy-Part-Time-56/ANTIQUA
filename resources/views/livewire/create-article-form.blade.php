<form wire:submit="store" class="create-article-card shadow-lg rounded-4 p-4 my-5 mx-auto" style="max-width:600px;">
    <h2 class="mb-4 text-center fw-bold text-primary">{{ __('ui.newart') }}</h2>
    <div class="mb-3">
        <label for="title" class="form-label fw-semibold">{{ __('ui.title') }}</label>
        <input type="text" class="form-control form-control-lg" id="title" wire:model="title"
            placeholder="Titolo dell'articolo">
        @error('title')
            <p class="text-danger fst-italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label fw-semibold">{{ __('ui.description:') }}</label>
        <textarea id="description" cols="30" rows="5" class="form-control form-control-lg" wire:model="description"
            placeholder="Descrivi il tuo articolo"></textarea>
        @error('description')
            <p class="text-danger fst-italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="price" class="form-label fw-semibold">{{ __('ui.price:') }}</label>
            <input type="number" step="0.01" class="form-control form-control-lg" id="price" wire:model="price"
                placeholder="Prezzo">
            @error('price')
                <p class="text-danger fst-italic mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="category" class="form-label fw-semibold">{{ __('ui.cat') }}</label>
            <select id="category" wire:model="category" class="form-select form-select-lg">
                <option value="" selected>{{ __('ui.selectacategory') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
                <p class="text-danger fst-italic mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="mb-4 mt-3">
        <label class="form-label fw-semibold">{{ __('ui.img') }}</label>
        <input type="file" wire:model.live="temporary_images" multiple
            class="form-control shadow-sm @error('temporary_images.*') is-invalid @enderror"
            placeholder="Carica immagini">
        @error('temporary_images.*')
            <p class="fst-italic text-danger mt-1">{{ $message }}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger mt-1">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        {{ __('ui.uptosiximg') }}
        <p class="fw-semibold mb-2">{{ __('ui.imgprev') }}</p>
        <div class="spinner-border text-primary" wire:loading role="status">
            <span class="visually-hidden">{{ __('ui.load') }}</span>
        </div>
        @if (!empty($images))
            <div wire:loading.remove class="d-flex flex-wrap gap-3 justify-content-center">
                @foreach ($images as $key => $image)
                    <div class="img-preview-card position-relative">
                        <div class="img-preview shadow rounded-3"
                            style="background-image: url('{{ $image->temporaryUrl() }}');"></div>
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 rounded-pill"
                            wire:click="removeImage({{ $key }})" title="Rimuovi">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        @endif
    </div>


    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow">{{ __('ui.create') }}</button>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</form>