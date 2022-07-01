<h1>
    Crea il comics
</h1>
<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div>
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title"> 
    </div>
    <div>
        <label for="description">Descrizione</label>
        <textarea type="text" id="description" name="description"></textarea>
    </div>
    <div>
        <label for="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb"> 
    </div>
    <div>
        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price"> 
    </div>
    <div>
        <label for="series">Serie</label>
        <input type="text" id="series" name="series"> 
    </div>
    <div>
        <label for="sale_date">Giorno di uscita</label>
        <input type="text" id="sale_date" name="sale_date"> 
    </div>
    <div>
        <label for="type">Tipo</label>
        <input type="text" id="type" name="type"> 
    </div>
    <button type="submit">Invia</button>
</form>