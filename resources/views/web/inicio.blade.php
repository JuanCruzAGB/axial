@extends('layout.index')

@section('css')
    <link href="{{asset('css/galeria/baguetteBox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/galeria/grid/gallery-grid.css')}}" rel="stylesheet">
    <link href="{{asset('css/web/inicio.css')}}" rel="stylesheet">
@endsection

@section('title')
    Axial - Grupo médico
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('banner')
    <div class="jumbotron jumbotron-fluid p-0 mb-0">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h2 class="h2-responsive text-white text-center mb-3">Abordamos todas las dolencias y <span>patologías <span>de la columna</span></span></h2>
                <div class="d-flex justify-content-center">
                    <a class="enviar-mensaje btn btn-primary" href="#" role="button">Envianos un mensaje</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="separador-banner col-12 p-3 px-md-5">
        <span class="quotes quote-left"><i class="quote-icon fas fa-quote-left"></i></span>
        <span class="quotes quote-right"><i class="quote-icon fas fa-quote-right"></i></span>
        <p class="col-12 col-md-10 col-lg-8 text-white text-center m-0 px-md-5">El dolor de espalda es un problema que afecta al 80% de la población mundial.</p>
    </div>    

    <div id="nuestros-servicios" class="nuestros-servicios col-12">
        <div class="row mb-2 px-3">
            <div" class="col-12 mt-4 mb-3 p-0">
                <div class="row">
                    <span class="col-12 lead text-center w-100 my-3 text-white">- Nuestros servicios -</span>
                    <h2 class="col-12 text-center w-100 px-3 m-0 text-white">Todo lo que podemos hacer por usted</h2>
                    <p class="col-12 px-4 mt-3 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente ad? Possimus, quam aperiam tempore molestias sed quos natus adipisci?</p>
                </div>
            </div>

            <div id="tratamiento-del-dolor" class="cartas-servicios card col-12 text-center mb-3 p-3">
                <div class="card-body">
                    <i class="fas fa-microscope fa-3x mb-3 iconos-servicios"></i>
                    <h3 class="card-title mb-3">Tratamiento del dolor</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>

            <div id="cirugia-mini-invasiva" class="cartas-servicios card col-12 text-center mb-3 p-3">
                <div class="card-body">
                    <i class="fas fa-microscope fa-3x mb-3 iconos-servicios"></i>
                    <h3 class="card-title mb-3">Cirugía mini invasiva</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>

            <div id="patologia-de-la-columna" class="cartas-servicios card col-12 text-center mb-3 p-3">
                <div class="card-body">
                    <i class="fas fa-microscope fa-3x mb-3 iconos-servicios"></i>
                    <h3 class="card-title mb-3">Patología de la columna</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="equipo" class="equipo row py-4 p-0">
        <h2 class="col-12 text-center mb-3">Equipo</h2>

        <div class="listado">
            <div class="miembros cards mx-3 pb-0">
                <div id="nombre-del-usuario" class="miembro collapsable-card card mr-3 p-0">
                    <div class="card-background">
                        <img class="mb-0" src="/img/bg-demo.jpg" alt="example image">
                    </div>
                    <div class="card-body p-3">
                        <a href="#nombre-del-usuario" class="collapsable-btn card-title m-0">
                            <h3 class="m-0">Pepe Diaz</h3>
                            <i class="collapsable-icon title-icon fas fa-sort-up"></i>
                        </a>
                        <div class="card-content px-3">
                            <div class="row d-flex justify-content-end">
                                <h4 class="col-12 m-0 p-0">Superheroe</h4>
                                <span class="col-12 m-0 p-0">Jefazo</span>
                                <ul class="col-12 my-3 pl-4 p-0">
                                    <li>Secundaria</li>
                                    <li>Y ya tah</li>
                                </ul>
                                <p class="col-12 p-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium tempora amet animi recusandae odio ad culpa voluptates quod repellat consequuntur blanditiis, molestias nesciunt. Nihil, numquam exercitationem temporibus consectetur qui laboriosam.</p>
                                <a target="_blank" href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nombre-del-usuario-2" class="miembro collapsable-card card mr-3 p-0">
                    <div class="card-background">
                        <img class="mb-0" src="/img/bg-demo.jpg" alt="example image">
                    </div>
                    <div class="card-body p-3">
                        <a href="#nombre-del-usuario-2" class="collapsable-btn card-title m-0">
                            <h3 class="m-0">Manolo Gomez</h3>
                            <i class="collapsable-icon title-icon fas fa-sort-up"></i>
                        </a>
                        <div class="card-content px-3">
                            <div class="row d-flex justify-content-end">
                                <h4 class="col-12 m-0 p-0">Pescador</h4>
                                <span class="col-12 m-0 p-0">Segundo al mando</span>
                                <ul class="col-12 my-3 pl-4 p-0">
                                    <li>Primaria</li>
                                    <li>Secundaria</li>
                                    <li>Terciaria - especializada en peces</li>
                                </ul>
                                <p class="col-12 p-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium tempora amet animi recusandae odio ad culpa voluptates quod repellat consequuntur blanditiis, molestias nesciunt. Nihil, numquam exercitationem temporibus consectetur qui laboriosam.</p>
                                <a target="_blank" href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script type="text/javascript" src="{{asset('js/web/inicio.js')}}"></script>
@endsection