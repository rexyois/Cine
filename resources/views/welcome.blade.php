@extends('layout.layout')

<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

@section('content')
    
<div class="col-12">
    @include('layouts.carousel')
</div>


<div class="row">
    <div class="col-1"></div>
    <div class="col-md-5">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Estreno</strong>
            <h3 class="mb-0">Cazador de vampiros</h3>
            <div class="mb-1 text-muted">29 de Octubre 2020</div>
            <p class="mb-auto">Futuro presidente que se vuelve cazador por venganza.</p>
            <a href="#" class="stretched-link">Continua leyendo</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg><img src="{{ asset('img/cazador.jpg') }}" style="height: 250px">
            
          </div>
        </div>
    </div>
        <div class="col-md-5">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Estreno</strong>
                <h3 class="mb-0">Liga de la justicia oscura: guerra Apokolips</h3>
                <div class="mb-1 text-muted">15 de noviembre 2020</div>
                <p class="mb-auto">la Liga
                  de la Justicia se reúne para enfrentarse a Darkseid.</p>
                <a href="#" class="stretched-link">Continua leyendo</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg><img src="{{ asset('img/dark.jpg') }}" style="height: 250px">
              </div>
            </div>
          </div>
      </div>
<div class="class col-1"></div>
</div>

<div class="row">
  <div class="col-1"></div>
  <div class="col-md-5">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Cartelera</strong>
          <h3 class="mb-0">Guerra Mundial Z</h3>
          <div class="mb-1 text-muted">08 de Diciembre 2020</div>
          <p class="mb-auto">una pandemia de zombis amenaza con destruir 
            a la humanidad.</p>
          <a href="#" class="stretched-link">Continua leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg><img src="{{ asset('img/world z.jpg') }}" style="height: 250px">
          
        </div>
      </div>
  </div>
</div>
<div class="class col-1"></div>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

