@extends('layouts.app')

@section('page-title', 'Crea Comic')

@section('main-content')
<h1 class="text-center py-4">
    Crea Comic
</h1>

<form action="{{ route('comics.store')}}" method="POST" class="container">

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" placeholder="Inserisci il Titolo.">
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'Immagine.">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" placeholder="Inserisci il Prezzo.">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" placeholder="Inserisci la Serie.">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita</label>
        <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data.">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <select class="form-select" id="type">
            <option select disabled> Seleziona un tipo.</option>
            <option value="comic book">Fumetto</option>
            <option value="graphic novel">Graphic Novel</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" id="artists" aria-describedby="artists-help" placeholder="Inserisci gli Artisti.">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli artisti separati da virgole
        </div>
    </div>

    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control" id="writers" aria-describedby="writers-help" placeholder="Inserisci gli Scrittori.">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli scrittori separati da virgole
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-success w-100">
            +AGGIUNGI
        </button>
    </div>

</form>
@endsection
