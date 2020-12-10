<div>

    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    
    <div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/justice.jpg') }}" style="height: 768px">
                <img src="{{ asset('img/.jpg') }}" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Liga de la justicia oscura: guerra Apokolips</h1>
                        <p>Sipnosis: Tras la destrucción de la Tierra, la Liga
                             de la Justicia se reúne para enfrentarse a Darkseid y salvar a los supervivientes restantes.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Compra tu entrada</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/vampire.jpg') }}" alt="" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Abraham Lincoln: Cazador de vampiros</h1>
                        <p>Sipnosis: Lincoln se compromete a salvar a Estados
                             Unidos del ataque de los muertos vivientes.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/world war z.jpg') }}" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Guerra Mundial Z</h1>
                        <p>sinopsis: Cuando una pandemia de zombis amenaza con destruir 
                            a la humanidad, un exinvestigador de Naciones Unidas es obligado a 
                            regresar al servicio para intentar descubrir la fuente de la infección.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    </div>