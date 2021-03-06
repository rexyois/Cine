@extends('layout.layout')

@section('name', 'entrances')

@section('content')

    <div class="row">

        <div class="col-sm-2">
            <a href="{{ route('entrances.create') }}">
                <button class="btn btn-info">Agregar</button>
            </a>

        </div>
        <div class="col-sm-10">
            <h1>Entradas</h1>
            <div class="btn-group col-4" role="group" aria-label="Basic example">
                <a href="{{ route('entrances.pdf') }}" class="btn btn-dark">PDF </a>
                <a href="/entrancesXLS" class="btn btn-primary">xls </a>
                <a href="/entrancesCSV" class="btn btn-dark">csv </a>
                <a href="/entrancesxml" class="btn btn-primary">xml</a>
            </div>


            @forelse($entrances as $entrance)

                <!-- <div class="row">-->
                <div class="card col-sm bg-light" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $entrance->price }}</h5>
                        <h6 class="card-title">{{ $entrance->hourEntrance }}</h6>

                        <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                            <a href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
                            <a href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Eliminar</button>
                        </form>
                    </div>
                </div>
            @empty
                <h3>No hay entradas disponibles</h3>

            @endforelse

            {{ $entrances->links() }}


        @endsection
