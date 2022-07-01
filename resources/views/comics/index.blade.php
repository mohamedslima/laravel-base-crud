<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    <header>
        <div class="navbar_container">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('comics.index') }}">Lista dei Comics</a>
            <a href="{{ route('comics.create') }}">Crea il tuo comics</a>
        </div>
        <h1>
            Lista dei Comics
        </h1>
    </header>
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <h2>
                            {{ $comic->title }}
                        </h2>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
