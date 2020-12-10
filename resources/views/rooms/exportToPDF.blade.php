@extends('layout.layout')
@section('content')

    <div>
        <h1>Lista de rooms</h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Lugares</th>
                <th>Localizacion</th>
                <th>Capacidad</th>
            </tr>
        </thead>
        @foreach ($rooms as $room)
            <tbody>
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->chairs }}</td>
                    <td>{{ $room->location }}</td>
                    <td>{{ $room->capacity }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
