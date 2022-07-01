<h1>
    Questa è la pagina dei dettagli
</h1>
<div class="container">
    <img src="{{ $comics->thumb }}" alt="">
    <h2>
        {{ $comics->title }}
    </h2>
    <p>
        {{ $comics->description }}
    </p>
    <p>
        {{ $comics->series }}
    </p>
    <p>
        {{ $comics->type }}
    </p>
    <p>
        {{ $comics->price }}
    </p>
</div>

