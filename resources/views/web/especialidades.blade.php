@extends('layout.index')

@section('css')
    <link href="{{asset('css/web/especialidades.css')}}" rel="stylesheet">
@endsection

@section('title')
    Axial - Especialidades
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
                    <span class="text-row">Especialidades</span>
                </h2>
            </div>
        </div>
    </div>
    <section class="col-12 col-md-10 col-xl-8 mx-auto mt-4 pt-5">
        <div class="row">
            <div class="col-12 col-lg-4 mb-lg-4 pb-lg-5">
                <ul class="menu-servicios-detallados list-group">
                    <li class="list-group-item border-0 text-center">
                        <button data-content="escoliosis-cifosis" class="active btn btn-more p-3">
                            <i class="icon-cuerpo mr-3 iconos-servicios icon"></i>
                            <span>Escoliosis – Cifosis</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="cirugias-minimamente-invasivas" class="btn btn-more p-3">
                            <i class="icon-espina mr-3 iconos-servicios icon"></i>
                            <span>Cirugías Mínimamente Invasiva</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="departamento-de-cirugia-pediatrica-de-la-columna-vertebral" class="btn btn-more p-3">
                            <i class="icon-columna-2 mr-3 iconos-servicios icon"></i>
                            <span>Departamento de cirugía pediátrica de la columna vertebral</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="evaluacion-interdisciplinaria" class="btn btn-more p-3">
                            <i class="icon-masaje mr-3 iconos-servicios icon"></i>
                            <span>Evaluación interdisciplinaria</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="descripcion-generada-automaticamente-columna-cervical" class="btn btn-more p-3">
                            <i class="icon-cuello mr-3 iconos-servicios icon"></i>
                            <span>Descripción generada automáticamente Columna cervical</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="columna-lumbar" class="btn btn-more p-3">
                            <i class="icon-hueso mr-3 iconos-servicios icon"></i>
                            <span>Columna lumbar</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="kinesiologia-y-actividad-fisica" class="btn btn-more p-3">
                            <i class="icon-cerebro mr-3 iconos-servicios icon"></i>
                            <span>Kinesiología y Actividad física</span>
                        </button>
                    </li>
                    <li class="list-group-item border-0 text-center">
                        <button data-content="intervencionismo-asistido-por-imagenes" class="btn btn-more p-3">
                            <i class="icon-atras mr-3 iconos-servicios icon"></i>
                            <span>Intervencionismo asistido por imágenes</span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="data col-12 col-lg-8 my-4 py-5 mt-lg-0 pt-lg-0 d-flex">
                <div id="escoliosis-cifosis" class="content px-3 px-lg-0 pl-lg-5 active">
                    <h2 class="text-center text-lg-left mb-3 mb-3">Escoliosis – Cifosis</h2>
                    <p class="m-0 mb-3 p-0">Somos un equipo altamente especializados en deformidades de la columna vertebral. Participamos en forma permanente en cursos de formación médica como participantes y expositores. Escoliosis y cifosis son algunas de las patologías mas relevantes al referirnos a curvas patológicas de la columna vertebral. Evaluamos, diagnosticamos y tratamos a pacientes pediátricos y adultos de forma interdisciplinaria.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/01-escoliosis-cifosis.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="cirugias-minimamente-invasivas" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Cirugías Mínimamente Invasiva</h2>
                    <p class="m-0 mb-3 p-0">Las modernas técnicas quirúrgicas, cada vez menos agresivas, utilizan incisiones de pocos milímetros para introducir minúsculos instrumentos, cuyo manejo es controlado en una pantalla de alta definición o por medio de visión aumentada a través de un microscopio. Las mensionadas técnicas quirúrgicas son de utilidad para tratar una gran cantidad de patologías de la columna vertebral tanto en el pacientes adultos como en pacientes pediátricos.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/02-cirugias-minimamente-invasivas.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="departamento-de-cirugia-pediatrica-de-la-columna-vertebral" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Departamento de cirugía pediátrica de la columna vertebral</h2>
                    <p class="m-0 mb-3 p-0">Una de nuestras fortalezas es la formación médica de todos los integrantes del equipo en enfermedades pediátricas. Participamos como referentes de la patología en cursos nacionales e internacionales. Evaluamos, diagnosticamos y tratamos todas las patologías pediátricas que afectan la columna vertebral. Trabajamos permanentemente de forma interdisciplinaria disponiendo de todas las especialidades relacionadas a las patologías que afectan la columna vertebral.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/03-departamento-de-cirugia-pediatrica-de-la-columna-vertebral.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="evaluacion-interdisciplinaria" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Evaluación interdisciplinaria</h2>
                    <p class="m-0 mb-3 p-0">Pediatras, neumonólogos, endoscopistas, nutricionistas, anestesiólogos, psicólogos, clínicos, kinesiólogos, cirujano y/o cualquier otra especialidad que sea requerida según la enfermedad del paciente; nos reunimos para evaluar diagnosticar y definir conductas a seguir ante patologías complejas. Creemos que el trabajo en equipo potencia las habilidades individuales redundando en beneficios para los pacientes y sus familias.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/04-evaluacion-interdisciplinaria.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="descripcion-generada-automaticamente-columna-cervical" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Descripción generada automáticamente Columna cervical</h2>
                    <p class="m-0 mb-3 p-0">La columna cervical es asiento de múltiples patologías, por envejecimiento, congénitas, traumáticas, tumorales, infecciosas y otras. El trabajo en equipo entre traumatólogos y neurocirujanos nos brindan un abordaje integral de las patología que alteran la columna cervical tanto en adultos como en niños..</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/05-descripcion-generada-automaticamente-columna-cervical.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="columna-lumbar" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Columna lumbar</h2>
                    <p class="m-0 mb-3 p-0">La región lumbar es donde asienten la mayor cantidad de patologías del adulto. Siendo el dolor lumbar la consulta mas frecuente. Canal estrecho, hernias de discos, espondilolistesis, escoliosis y fracturas son algunas de las patologías que afectan la columna lumbar.
                    La visión conjunta entre traumatólogos, neurocirujanos, kinesiólogos y entrenadores físicos que siempre realizamos en nuestro equipo, nos permite considerar los mejores tratamientos para cada dolencia que afecta la región lumbar.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/06-columna-lumbar.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="kinesiologia-y-actividad-fisica" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Kinesiología y Actividad física</h2>
                    <p class="m-0 mb-3 p-0">El equipo de Axial considera indispensable interactuar con kinesiólogos y entrenadores físicos para el tratamiento de las patologías que afectan a la columna vertebral. La interdisciplina con diálogo permanente sobre la evolución de los pacientes permite adecuar las terapéuticas y consecuentemente obtener una mejor y más temprana recuperación. Nuestro equipo está especializado tanto en pacientes adultos como pediátricos.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/07-kinesiologia-y-actividad-fisica.jpg" alt="Imagen del servicio">
                    </div>
                </div>
                <div id="intervencionismo-asistido-por-imagenes" class="content px-3 px-lg-0 pl-lg-5">
                    <h2 class="text-center text-lg-left mb-3">Intervencionismo asistido por imágenes</h2>
                    <p class="m-0 mb-3 p-0">Contamos con un equipo altamente especializado en las más modernas técnicas de intervencionismos asistidas por imágenes de alta resolución.
                    Son una herramienta indispensable, en continuo crecimiento y desarrollo. Son de utilidad para diagnósticos y tratamientos de un gran número de patologías en toda la extensión de la columna vertebral. Son aplicadas tanto en patologías del adulto como en niños.</p>
                    <div class="imagen-servicio d-flex justify-content-center px-0">
                        <img src="/img/especialidades/08-intervencionismo-asistido-por-imagenes.jpg" alt="Imagen del servicio">
                    </div>
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
    <script src="{{asset('js/web/especialidades.js')}}"></script>
@endsection