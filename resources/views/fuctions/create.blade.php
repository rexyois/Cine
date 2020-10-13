@extends('layout.layout')

@section('title', 'Agregar Funciones')

@section('content')


    <div class="row">

        <h3>Agregar funciones </h3>
        <div class="col-sm-2">
            <a href="{{ route('fuctions.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <br>
    <div class="jumbotron">
        <br>
        <form method="post" action="{{ route('fuctions.store') }}">
            @csrf
            <div>
                <label for="">Fecha</label>
                <input class="form-control" type="text" name="start" id="" required maxlength="6">
            </div>
            <div>
                <label for="">Hora</label>
                <select required name="end" id="">
                    <option value="">Selecciona la hora</option>
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
                
            <div>
                <label for="">Lugares disponibles</label>
                <select required name="aviable" id="">
                    <option value="">Selecciona un lugar</option>
                    <option value="Fila-A">Fila-A</option>
                    <option value="Fila-B">Fila-B</option>
                    <option value="Fila-C">Fila-C</option>
                    <option value="Fila-D">Fila-D</option>
                    <option value="Fila-E">Fila-E</option>
                    <option value="Fila-F">Fila-F</option>
                    <option value="Fila-G">Fila-G</option>
                    <option value="Fila-H">Fila-H</option>
                    <option value="Fila-I">Fila-I</option>
                </select>
            </div>

            <div>
                <label for="">Turno</label>
                <select required name="type" id="">
                    <option value="">Selecciona un turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>

            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">


        </form>
    </div>
@endsection