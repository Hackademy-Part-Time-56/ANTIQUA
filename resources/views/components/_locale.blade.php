<form class="d-inline mt-3" action="{{route('setLocale' , $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="16" height="16" />
    </button>
</form>