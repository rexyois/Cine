@extends('layout.layout')
@section('content')

    <div>
        <h1>Peliculas en cartelera </h1>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th>Nombre de la pelicula</th>
                <th>Sinopsis</th>
                <th>Categoria</th>
                <th>Director</th>
                <th>Duracion</th>
                <th>Actores</th>
                <th>Genero</th>
            </tr>
        </thead>
        @foreach ($movies as $movie)
            <tbody>
                <tr>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->synopsis }}</td>
                    <td>{{ $movie->category }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->duracion }}</td>
                    <td>{{ $movie->actors }}</td>
                    <td>{{ $movie->genre }}</td>
                </tr>
            </tbody>
        @endforeach
        </div>
    </table>



@endsection
