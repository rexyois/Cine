@extends('layout.layout')

@section('title', 'Editar entradas')

@section('content')

    <div class="row">
        <div class="col-sm-10">
            <h1>Agregar entradas</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('entrances.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('entrances.update', $room->id) }}">
            @csrf
            @method('PUT')
            <div>
                <label for="">Costo</label>
                <input class="form-control" type="text" name="price" id="" required maxlength="6">
            </div>
            <div>
                <label for="">Hora de entrada</label>
                <select required name="hourEntrance" id="">
                    <option value="">Selecciona una hora</option>
                    <option value="2:30">2:30</option>
                    <option value="3:00">3:00</option>
                    <option value="3:45">3:45</option>
                    <option value="4:20">4:20</option>
                    <option value="5:00">5:00</option>
                    <option value="6:00">6:00</option>
                    <option value="7:10">7:10</option>
                    <option value="7:40">7:40</option>
                    <option value="8:25">8:25</option>
                    <option value="8:55">8:55</option>
                    <option value="9:00">9:00</option>
                    <option value="9:15">9:15</option>
                    <option value="10:35">10:35</option>
                    <option value="10:45">10:45</option>
                    <option value="11:00">11:00</option>
                    <option value="11:15">11:15</option>
                    <option value="12:00">12:00</option>
                </select>
            </div>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar cambios">


        </form>
    </div>

@endsection
