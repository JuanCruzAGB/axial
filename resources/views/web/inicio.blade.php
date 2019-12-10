@extends('layout.index')

@section('css')
    <link href="{{asset('css/galeria/baguetteBox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/galeria/grid/gallery-grid.css')}}" rel="stylesheet">
    <link href="{{asset('css/web/inicio.css')}}" rel="stylesheet">
@endsection

@section('title')
    Title
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('banner')
<div class="jumbotron jumbotron-fluid p-0 mb-0">
    <div class="container d-flex align-items-center">
        <div>
            <h2 class="h2-responsive text-white text-center pt-5">Abordamos todas las dolencias y patologías <span>de la columna</span></h2>
            <div class="d-flex justify-content-center">
                <a class="enviar-mensaje btn btn-primary mt-4" href="#" role="button">Envianos un mensaje</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
    <div class="separador-banner">
        <p class="text-white text-center p-3 my-3 m-0">El dolor de espalda es un problema que afecta al 80% de la población mundial.</p>
    </div>    

    <div class="nuestros-servicios">
        <div class="row">
            <span class="lead text-center w-100 my-3 text-white">- Nuestros servicios -</span>
            <h2 class="text-center w-100 px-4 text-white">Todo lo que podemos hacer por usted</h2>
            <p class="px-5 mt-3 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente ad? Possimus, quam aperiam tempore molestias sed quos natus adipisci?</p>
        </div>

        <div class="cartas-servicios card text-center m-3">
                <div class="card-body">
                    <i class="fas fa-microscope fa-3x mb-4 iconos-servicios"></i>
                    <h5 class="card-title">Tratamiento del dolor</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
        </div>

        <div class="cartas-servicios card text-center m-3">
            <div class="card-body">
                <i class="fas fa-microscope fa-3x mb-4 iconos-servicios"></i>
                <h5 class="card-title">Cirujía mini invasiva</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>

        <div class="cartas-servicios card text-center m-3">
            <div class="card-body">
                <i class="fas fa-microscope fa-3x mb-4 iconos-servicios"></i>
                <h5 class="card-title">Patología de la columna</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>

    <div id="galeria" class="gallery-container col-12 col-lg-10 p-0 mx-md-auto">
                <h2 class="text-center mt-5 mb-0">Team</h2>
                <div class="tz-gallery galeria px-3 pb-0">
                    <div class="row pt-3 pb-4">
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="">
                                    <img class="mb-0" src="/img/bg-demo.jpg" alt="">
                                </a>
                            </div>
                        
                            <div class="col-sm-6 col-md-4 d-none">
                                <a class="lightbox" href=""></a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="empty-image p-1">
                                    <div class="empty-content"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="empty-image p-1">
                                    <div class="empty-content"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="empty-image p-1">
                                    <div class="empty-content"></div>
                                </div>
                            </div>
                    </div>
                </div> 
            </div>

            <div class="row col-12 d-flex justify-content-center">
                <a class="btn btn-primary load_gallery" href="#">Ver más</a>
            </div>
@endsection

@section('extras')
    @component('components.whatsapp')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/galeria/baguetteBox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/web/inicio.js')}}"></script>

    <script>
         baguetteBox.run('.tz-gallery', {
            buttons: true,
        });
    </script>
@endsection