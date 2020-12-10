@extends('layout.layout')
@section('content')

    <div>
        <h1>Lista de Productos </h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Costo</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        @foreach ($consumables as $consumable)
            <tbody>
                <tr>
                    <td>{{ $consumable->id }}</td>
                    <td>{{ $consumable->name }}</td>
                    <td>{{ $consumable->price }}</td>
                    <td>{{ $consumable->quantity }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
