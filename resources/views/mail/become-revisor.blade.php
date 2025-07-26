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
        <p>{{ __('ui.name:') }}{{$user->name}}</p>
        <p>{{ __('ui.email:') }}{{$user->email}}</p>
        <p></p>{{ __('ui.makethemreviewer') }}
        <a href="{{route('make.revisor',compact('user'))}}">Rendi Revisor</a>
    </div>
</body>
</html>