<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <header class="welcome_header">
        <div class="navbar_container">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('comics.index') }}">Lista dei Comics</a>
            <a href="{{ route('comics.create') }}">Crea il tuo comics</a>
        </div>

        <h1 class="welcome_title">
            Benvenuto nel mondo dei Comics
        </h1>
    </header>

</body>

</html>
