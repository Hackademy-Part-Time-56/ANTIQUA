<! DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/publish-section.css',
        'resources/css/category-nav.css',
        'resources/css/create-article.css',
        'resources/css/card.css',
        'resources/css/navbar.css',
        'resources/css/footer.css',
    ])
    <title>Antiqua</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <x-navbar />

    <div class="min-vh-100">
        {{$slot }}
    </div>
    <x-footer />
</body>

</html>