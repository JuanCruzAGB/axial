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
            <div class="tarjetas-del-equipo col-12">
                <div class="my-4">
                    <h3 class="text-center dark-text">Cristian Fuster</h3>
                    <div class="d-flex justify-content-center">
                        <img class="rounded-circle" src="/img/servicios/random.jpg" alt="">
                    </div>
                    <div class="datos-tarjetas text-dark px-4 my-5">
                        <p> El Dr. Cristian Fuster es Neurocirujano, argentino, nació en Charata en la provincia del Chaco.</p>
                        <p> Egresó como médico de la Universidad Barceló (Buenos Aires) en el año 1999
                            y completó su formación  neuroquirúrgica en el instituto FLENI.</p>
                        <p> Actualmente desarrolla su actividad profesional practicando intervenciones
                            quirúrgicas cerebrales y cirugías mini invasivas ( tubulares y
                            endoscópicas) de la columna vertebral.</p>
                        <p> Es director académico de la Diplomatura en Deporte y Neurociencias de la
                            Universidad  Favaloro.</p>
                        <p> Entre los años 2014 y 2016 ocupó el cargo de Director Médico del Hospital
                            Universitario de la Fundación Favaloro.
                            En el año 2013, fue quien intervino quirúrgicamente de un hematoma  cerebral
                            subdural, a la entonces Sra. Presidenta de la Nación Cristina Fernandez de
                            Kichner.</p>
                        <p> En el año 2015, recibió la mención de honor “Senador Domingo Faustino
                            Sarmiento”, en reconocimiento a su obra destinada a mejorar la calidad de
                            vida de sus semejantes.</p>
                        <p> Fue miembro del equipo de neurocirugía del Hospital Austral, Jefe de
                            neurocirugía y director médico del Instituto de Neurociencias de la
                            Fundación Favaloro.</p>
                    </div>
                </div>
            <div>

            <div class="tarjetas-del-equipo col-12">
                <div class="my-4">
                    <h3 class="text-center dark-text">Eduardo Galaretto</h3>
                    <div class="d-flex justify-content-center">
                        <img class="rounded-circle" src="/img/servicios/random.jpg" alt="">
                    </div>
                    <div class="datos-tarjetas text-dark px-4 my-5">
                        <p> Eduardo Galaretto nació en la ciudad de Caracarañá de la provincia de Santa Fe.</p>
                        <p> Egresó como Médico en la Universidad Nacional de Rosario.</p>
                        <p> Su residencia en Ortopedia y Traumatología la cursó en el Sanatorio Laprida
                            de la misma Ciudad.</p>
                        <p> Su formación de post grado comenzó en el Hospital de Pediatría Juan P.
                            Garrahan donde realizo un Fellow en el Servicio de Columna por 2 años. Luego
                            realizó rotaciones por los centros más prestigiosos de Estados Unidos y Europa
                            siempre enfocado en Patología de la columna Vertebral.</p>
                        <p> Miembro Titular de la Asociación Argentina de Patologia de la Columna
                            Vertebral</p>
                        <p> Miembro Titular de la Asociacion Argentina de Ortopedia y Traumatologia.</p>
                        <p> Cirujano espinal certificado por la Asociación Argentina de Patología de la
                            Columna Vertebral</p>
                        <p> Médico de Planta Permanente del Hospital de Pediatría Juan P. Garrahan.</p>
                        <p> Médico Consultor del Sanatorio de Niños de la Ciudad de Rosario.</p>
                        <p> Médico Consultor del Centro de Ortopedia y Traumatología de la Ciudad de
                            Rosario.</p>
                        <p> Médico de Planta Permanente del Hospital Universitario Austral.</p>
                        <p> Director Médico del Servicio de Columna Vertebral de Axial Grupo Médico.</p>
                    </div>
                </div>
            <div>
            <div class="tarjetas-del-equipo col-12">
                <div class="my-4">
                    <h3 class="text-center dark-text">Nicolas Coombes</h3>
                    <div class="d-flex justify-content-center">
                        <img class="rounded-circle" src="/img/servicios/random.jpg" alt="">
                    </div>
                    <div class="datos-tarjetas text-dark px-4 my-5">
                        <p> Médico cirujano egresado de la Universidad Nacional del Nordeste (2006)</p>
                        <p> Residencia Completa de Ortopedia y Traumatología Hospital Julio C. Perrando
                            Resistencia - Chaco (2007-2010).</p>
                        <p> Fellowship AOSpine Short-Term en Deformidades Espinales Pediátrica
                            (Hospital Garrahan) (2010).</p>
                        <p> Beca de Perfeccionamiento en Deformidades Espinales Pediátricas (Hospital
                            Garrahan 2011-2012).</p>
                        <p> Fellowship en el Instituto de Rehabilitación Psicofísica de Buenos Aires (IREP)
                            CIRUGIA DE COLUMNA DEL ADULTO (2012-2013).</p>
                        <p> Miembro de la Sociedad Argentina de Patología de Columna Vertebral (
                            SAPCV) y de la Asociación Argentina de Ortopedia y Traumatología (AAOT).</p>
                    </div>
                </div>
            <div>



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