<?php
    /** @var Miembro[] $miembros */
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
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3 mb-5">
        <h1 class="my-2 pb-lg-4 text-center">¿Quiénes somos?</h1>
        <div class="row">
            <div class="col-12 mt-5 mb-3 info-nosotros">
                <p>Los Dres. Eduardo Galaretto (Ortopedia y Traumatología) y  Cristian Fuster (Neurocirujano) trabajan juntos desde hace más de 10 años; siempre consideraron que la interacción entre Traumatólogo y Neurocirujano al momento de evaluar y decidir un tratamiento es una gran fortaleza, ya que aporta visiones complementarias y aumenta la cantidad de recursos técnicos ante la necesidad de sugerir tratamientos sobre patologías que afectan a la columna vertebral tanto en pacientes pediátricos como adultos. </p>
                <p> En el año 2018 fundaron Axial Grupo Médico.</p>
                <p>Axial Grupo Médico es el resultado de la búsqueda constante de lograr excelencia médica, basada en la interacción sinérgica de profesionales de distintas especialidades, apoyados en tecnología e investigación con valores morales y éticos que permitan  mejorar la calidad de vida de las personas que presentan patologías de la columna vertebral. </p>
                <p> Hemos sumado traumatólogos y neurocirujanos altamente capacitados en el tratamiento de patologías de la columna vertebral, también médicos de distintas especialidades relacionadas, kinesiólogos y profesores de educación física, todos específicamente entrenados para resolver la problemática global de las personas con dolencias de Columna Vertebral en todas las etapas del tratamiento.</p>
            </div>
        </div>
    </div>
            <div>
                <div class="col-12 px-0 mb-4 equipo-div">
                    <img class="img-fluid" src="/img/quienes/01-equipo.jpg" alt="El equipo">
                </div>
            </div>
            
        

        <div id="equipo" class="row">
            <div class="tarjetas-del-equipo">
                <div>

                </div>
                <div>

                </div>
                <div>

                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/info.js')}}"></script>
@endsection