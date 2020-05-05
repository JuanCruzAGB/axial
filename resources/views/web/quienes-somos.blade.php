<?php
    /** @var array $data
     *      Miembros[] $miembro
     *  @var array $counts 
     *      int $miembro
     */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/web/quienes.css')}}" rel="stylesheet">
@endsection

@section('title')
    Axial - Quiénes Somos
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="separador separador-call-to-action col-12 p-md-5">
        <div class="row">
            <div class="col-12">
                <h2 class="h2-responsive text-white text-center my-4">
                    <span class="text-row">¿Quiénes somos?</span>
                </h2>
            </div>
        </div>
    </div>
    <section class="col-12 col-md-10 col-xl-8 mx-auto mt-4 pt-5">
        <div class="row">
            <div class="col-12 info-nosotros">
                <p>Los Dres. Eduardo Galaretto (Ortopedia y Traumatología) y  Cristian Fuster (Neurocirujano) trabajan juntos desde hace más de 10 años; siempre consideraron que la interacción entre Traumatólogo y Neurocirujano al momento de evaluar y decidir un tratamiento es una gran fortaleza, ya que aporta visiones complementarias y aumenta la cantidad de recursos técnicos ante la necesidad de sugerir tratamientos sobre patologías que afectan a la columna vertebral tanto en pacientes pediátricos como adultos. </p>
                <p> En el año 2018 fundaron Axial Grupo Médico.</p>
                <p>Axial Grupo Médico es el resultado de la búsqueda constante de lograr excelencia médica, basada en la interacción sinérgica de profesionales de distintas especialidades, apoyados en tecnología e investigación con valores morales y éticos que permitan  mejorar la calidad de vida de las personas que presentan patologías de la columna vertebral. </p>
                <p> Hemos sumado traumatólogos y neurocirujanos altamente capacitados en el tratamiento de patologías de la columna vertebral, también médicos de distintas especialidades relacionadas, kinesiólogos y profesores de educación física, todos específicamente entrenados para resolver la problemática global de las personas con dolencias de Columna Vertebral en todas las etapas del tratamiento.</p>
            </div>
        </div>
    </section>
    @if($counts['miembros'])
        <section id="equipo" class="col-12 pt-5 mt-4">
            <div class="row">
                @foreach($data['miembros'] as $miembro)
                    <div id="{{$miembro->slug}}" class="miembro col-12 d-lg-flex my-4">
                        <div class="mt-4 col-12 col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img class="rounded-circle" src="{{asset('storage/' . $miembro->imagen)}}" alt="{{$miembro->nombre}}">
                            </div>
                            <h3 class="text-center text-dark my-4 miembro-nombre">{{$miembro->nombre}}</h3>
                            <h4 class="text-center text-dark my-4 miembro-titulo">{{$miembro->titulo}}</h4>
                            <h4 class="text-center text-dark my-4 miembro-puesto">{{$miembro->puesto}}</h4>
                            <a class="btn btn-secondary d-none d-lg-block" target="_blank" href="{{$miembro->link}}">
                                <i class="fas fa-chevron-right pr-2 pb-0"></i> Ver sitio web
                            </a>
                        </div>
                        <div class="mb-4 col-12 col-lg-6">   
                            <div class="datos-tarjetas text-dark px-4 my-5 miembro-cv">{!!$miembro->cv!!}</div>
                            <a class="btn btn-secondary d-lg-none" target="_blank" href="{{$miembro->link}}">
                                <i class="fas fa-chevron-right pr-2 pb-0"></i> Ver sitio web
                            </a>
                        </div>
                    
                    </div>
                    <hr class="mx-auto">
                @endforeach
            </div>

            
            <div class="separador separador-call-to-action col-12 p-md-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="h2-responsive text-white text-center mt-4 mb-3">
                            <span class="text-row">Ir al contacto</span>
                        </h2>
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-primary" href="/noticias" role="button">Blog</a>
                        </div>
                    </div>
                </div>
            </div>           
        </section>
    @endif
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/info.js')}}"></script>
@endsection