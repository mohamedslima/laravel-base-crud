<h1>
   Modifica il tuo comics
</h1>
<form action="{{ route('comics.update', ['comic' => $this_comic->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" value="{{ $this_comic->title }}"> 
    </div>
    <div>
        <label for="description">Descrizione</label>
        <input type="text" id="description" name="description" value="{{ $this_comic->description }}">
    </div>
    <div>
        <label for="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb" value="{{ $this_comic->thumb }}"> 
    </div>
    <div>
        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price" value="{{ $this_comic->price }}"> 
    </div>
    <div>
        <label for="series">Serie</label>
        <input type="text" id="series" name="series" value="{{ $this_comic->series }}"> 
    </div>
    <div>
        <label for="sale_date">Giorno di uscita</label>
        <input type="text" id="sale_date" name="sale_date" value="{{ $this_comic->sale_date }}"> 
    </div>
    <div>
        <label for="type">Tipo</label>
        <input type="text" id="type" name="type" value="{{ $this_comic->type }}"> 
    </div>
    <button type="submit">Invia</button>
</form>