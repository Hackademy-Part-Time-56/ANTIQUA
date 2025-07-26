<form wire:submit="save" class="bg-body-tertiary shadow rounded p-5 my-5">
    <div class="class mb-3">
        <label for="title" class="form-label">{{ __('ui.title') }}</label>
        <input type="text" class="form-control" id="title" wire:model="title">
        @error('title')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">{{ __('ui.description:') }}</label>
        <textarea id="description" cols="30" rows="10" class="form-control" wire:model="description"></textarea>
        @error('description')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">{{ __('ui.price:') }}</label>
        <input type="text" class="form-control" id="price" wire:model="price">
        @error('price')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <select id="category" wire:model="category" class="form-control">
            <option label disable> {{ __('ui.selectacategory') }} </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-dark">{{ __('ui.create') }}</button>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</form>