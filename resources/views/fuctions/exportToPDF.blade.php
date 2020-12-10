@extends('layout.layout')
@section('content')

    <div>
        <h1>Lista Entradas </h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Costo</th>
                <th>Hora inicio</th>
                <th>Hora fin</th>
                <th>Disponible/th>
                <th>Tipo</th>
            </tr>
        </thead>
        @foreach ($funtions as $funtion)
            <tbody>
                <tr>
                    <td>{{ $funtion->id }}</td>
                    <td>{{ $funtion->start }}</td>
                    <td>{{ $funtion->end }}</td>
                    <td>{{ $funtion->aviable }}</td>
                    <td>{{ $funtion->type }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>

@endsection
