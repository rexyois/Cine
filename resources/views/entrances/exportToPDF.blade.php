@extends('layout.layout')
@section('content')

    <div>
        <h1>Listado de Entradas </h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Costo</th>
                <th>Hora entrada</th>
            </tr>
        </thead>
        @foreach ($entrances as $entrance)
            <tbody>
                <tr>
                    <td>{{ $entrance->id }}</td>
                    <td>{{ $entrance->price }}</td>
                    <td>{{ $entrance->hourEntrance }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>

@endsection
