@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1 class="text-center py-4">
    {{$comic->title}}
</h1>

<div class="card">
    <div class="card-body">
        <ul>
            <li>
                Prezzo: {{ $comic->price }}
            </li>
            <li>
                Serie: {{ $comic->series }}
            </li>
            <li>
                Data vendita: {{ $comic->sale_date }}
            </li>
            <li>
                Tipo: {{ $comic->type }}
            </li>
            <li>
                Serie: {{ $comic->series }}
            </li>
            <li>
                Artisti:
                <ul>
                    @foreach (json_decode($comic->artists, true) as $artist)
                    <li>
                        {{ $artist }}
                    </li>

                    @endforeach

                </ul>

            </li>
            <li>
                Scrittori:
                <ul>
                    @foreach (json_decode($comic->writers , true) as $writer)
                    <li>
                        {{ $writer }}
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <p>
            {{ $comic->decription }}
        </p>
    </div>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-bottom">

</div>
@endsection
