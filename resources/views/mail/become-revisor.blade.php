<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antiqua</title>
</head>
<body>
    <div>
        <h1>{{ __('ui.useraskedwork') }}</h1>
        <h2>{{ __('ui.theirinformation') }}</h2>
        @if(property_exists($data, 'nome'))
            <p><strong>Nome:</strong> {{ $data->nome }}</p>
            <p><strong>Email:</strong> {{ $data->email }}</p>
            @if($data->ruolo)
                <p><strong>Ruolo di interesse:</strong> {{ $data->ruolo }}</p>
            @endif
            @if($data->cv)
                <p><strong>CV:</strong> <a href="{{ $data->cv }}">{{ $data->cv }}</a></p>
            @endif
            @if($data->messaggio)
                <p><strong>Messaggio:</strong><br>{{ $data->messaggio }}</p>
            @endif
        @else
            <p><strong>Utente:</strong> {{ $data->name }}</p>
            <p><strong>Email:</strong> {{ $data->email }}</p>
        @endif

        
            <p>{{ __('ui.makethemreviewer') }}</p>
            <a href="{{ route('make.revisor', compact('user', 'data')) }}">Rendi Revisore</a>
        
        
    </div>
</body>
</html>