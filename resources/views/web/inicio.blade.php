<?php
    /** @var array $validation */
    /** @var Miembro[] $miembros */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/form/form.css')}}" rel="stylesheet">
    <link href="{{asset('css/form/util.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/animsition/css/animsition.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/Icons/styles.css')}}" rel="stylesheet">
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
            <div class="col-12 col-md-10 col-lg-7">
                <h2 class="h2-responsive text-white text-center mb-3">
                    <span class="text-row pb-4">Especialistas en patologías de la columna vertebral
                </h2>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary" href="#contacto" role="button">Solicitar Turno</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
        <div class="separador separador-banner col-12 p-md-5">
            <p class="col-12 col-md-10 col-lg-6 text-white text-center m-0 p-0">Nuestra Misión es evolucionar, enfocando nuestras actividades y esfuerzos para mejorar la calidad de vida de las personas con patologías de la columna vertebral. Convirtiéndonos en una institución de referencia local, regional e internacional en evaluación, tratamiento y formación médica continua, relacionada con Patologías de la Columna Vertebral Pediátrica y Adultos.</p>
        </div>

        @component('components.inicio.especialidades')
        @endcomponent

        @component('components.inicio.patologias')
        @endcomponent

        <div class="separador separador-call-to-action col-12 p-md-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="h2-responsive text-white text-center mt-4 mb-3">
                        <span class="text-row">Ingresá a nuestro Blog</span>
                    </h2>
                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-primary" href="/noticias" role="button">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container-fluid contenedor p-0">
    <div class="row">
        @component('components.inicio.equipo', ['miembros' => $miembros])
        @endcomponent

        <div class="col-12 aux-img text-center mt-4 pt-5 px-lg-5 mb-lg-5">
            <img src="{{asset('img/inicio/02-operando.jpg')}}" alt="Imagen de muestra">
        </div>
    </div>
</div>
            
<div class="container-fluid contenedor px-0">
    <div class="row">
        @component('components.formularios.contacto', ['validation' => $validation])
        @endcomponent

        <div class="donde-encontrarnos col-12 p-0">
            <div class="row justify-content-center px-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.2480796792042!2d-58.434819084771135!3d-34.572588880467585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb59624034bf3%3A0x4c5b8dd6024977f9!2sHuergo%20366%2C%20C1426%20BQF%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1583877457141!5m2!1ses!2sar" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
    <script src="{{asset('submodules/ValidationJS/js/Validation.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Rule.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Message.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Requirement.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Validator.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Invalidator.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Form.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Input.js')}}"></script>
    <script src="{{asset('submodules/ValidationJS/js/Support.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/web/inicio.js')}}"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
    </script>
    
    <script type="text/javascript" src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <script type="text/javascript" src="{{ asset('https://unpkg.com/scrollreveal') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrollReveal.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/form/form.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
@endsection