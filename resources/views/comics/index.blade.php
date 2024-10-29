@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1 class="text-center py-4">
    Comics
</h1>
<div class="mb-4 container">
    <a href="{{route('comics.create')}}" class="btn btn-success w-100">
       +AGGIUNGI
    </a>

</div>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Serie</th>
      <th scope="col">Tipo</th>
      <th scope="col">Prezzo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->id}}</th>
            <td>{{ $comic->title}}</td>
            <td>{{ $comic->series}}</td>
            <td>{{ $comic->type}}</td>
            <td>{{ $comic->price}}</td>
            <td>
                <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">VEDI</a>
            </td>

        </tr>
    @endforeach
  </tbody>
</table>
@endsection
