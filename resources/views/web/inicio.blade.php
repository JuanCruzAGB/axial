<?php
    /** @var array $validation */
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
                    <span class="text-row">Abordamos todas las dolencias y </span>    
                    <span class="text-row">patologías <span>de la columna</span></span>
                </h2>
                <div class="d-flex justify-content-center">
                    <a class="enviar-mensaje btn btn-primary" href="#contacto" role="button">Envianos un mensaje</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="separador-banner col-12 px-md-5">
        <span class="quotes quote-left"><i class="quote-icon fas fa-quote-left"></i></span>
        <span class="quotes quote-right"><i class="quote-icon fas fa-quote-right"></i></span>
        <p class="col-12 col-md-10 col-lg-6 text-white text-center m-0 py-4 py-lg-2 px-md-5 px-lg-4">El dolor de espalda es un problema que afecta al 80% de la población mundial.</p>
    </div>

    <div id="nuestros-servicios" class="nuestros-servicios col-12">
        <div class="row mb-2 px-3">
            <div" class="col-12 mt-4 mb-3 p-0">
                <div class="row d-flex justify-content-center">
                    <h2 class="col-12 text-center w-100 m-0 mt-3 pt-3 px-3">Servicios</h2>
                </div>
            </div>

            <div class="cards row d-flex justify-content-center pb-3 px-0 mx-0">
                <div id="tratamiento-del-dolor" class="cartas-servicios card col-12 col-md-3 text-center mb-3 p-3">
                    <div class="card-body">
                        <i class="fas fa-diagnoses fa-3x mb-3 iconos-servicios"></i>
                        <h3 class="card-title mb-3">Tratamiento del dolor</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>

                <div id="cirugia-mini-invasiva" class="cartas-servicios card col-12 col-md-3 text-center mb-3 p-3">
                    <div class="card-body">
                        <i class="fas fa-microscope fa-3x mb-3 iconos-servicios"></i>
                        <h3 class="card-title mb-3">Cirugía mini invasiva</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>

                <div id="patologia-de-la-columna" class="cartas-servicios card col-12 col-md-3 text-center mb-3 p-3">
                    <div class="card-body">
                        <i class="fas fa-user-md fa-3x mb-3 iconos-servicios"></i>
                        <h3 class="card-title mb-3">Patología de la columna</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                
                <div id="tratamiento-del-dolor" class="cartas-servicios card col-12 col-md-3 text-center mb-3 p-3">
                    <div class="card-body">
                        <i class="fas fa-diagnoses fa-3x mb-3 iconos-servicios"></i>
                        <h3 class="card-title mb-3">Tratamiento del dolor</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>

                <div id="cirugia-mini-invasiva" class="cartas-servicios card col-12 col-md-3 text-center mb-3 p-3">
                    <div class="card-body">
                        <i class="fas fa-microscope fa-3x mb-3 iconos-servicios"></i>
                        <h3 class="card-title mb-3">Cirugía mini invasiva</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>

                <div id="patologia-de-la-columna" class="cartas-servicios card col-12 col-md-3 text-center mb-3 p-3">
                    <div class="card-body">
                        <i class="fas fa-user-md fa-3x mb-3 iconos-servicios"></i>
                        <h3 class="card-title mb-3">Patología de la columna</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="separador-call-to-action container-fluid contenedor p-0">
    <div class="row">
        <div class="col-12">
            <h2 class="h2-responsive text-white text-center mt-4 mb-3">
                <span class="text-row">Visita nuestro blog</span>
            </h2>
            <div class="d-flex justify-content-center mb-4">
                <a class="go-blog btn btn-primary" href="/noticias" role="button">Leer</a>
            </div>
        </div>
    </div>
</div>
    
<div class="container-fluid contenedor p-0">
    <div id="equipo" class="equipo col-12 py-4 p-0">
        <h2 class="text-center mt-3 mb-4">Equipo</h2>

        <div class="listado">
            <div class="miembros cards mt-4 mx-3 pb-0">
                @if(count($miembros))
                    @foreach($miembros as $miembro)
                        <div id="{{$miembro->slug}}" class="miembro collapsable-card card mr-3 p-0">
                            <div class="card-background">
                                <img class="mb-0" src="{{asset('storage/' . $miembro->imagen)}}" alt="{{$miembro->nombre}}">
                            </div>
                            <div class="card-body p-3">
                                <a href="#{{$miembro->slug}}" class="collapsable-btn card-title m-0">
                                    <h3 class="m-0">{{$miembro->nombre}}<i class="collapsable-icon title-icon fas fa-sort-up"></i></h3>
                                   
                                </a>
                                <div class="card-content px-3">
                                    <div class="row d-flex justify-content-end">
                                        <h4 class="col-12 m-0 p-0">{{$miembro->titulo}}</h4>
                                        <span class="col-12 m-0 p-0">{{$miembro->puesto}}</span>
                                        <div class="col-12 p-0">{!!$miembro->cv!!}</div>
                                        @if($miembro->link !== null && $miembro->link != '')
                                            <a target="_blank" href="{{$miembro->link}}" class="btn btn-primary">Ver más</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="empty-miembro card mr-3 p-0">
                        <div class="empty-background"></div>
                        <div class="card-body p-3">
                            <div class="empty-nombre"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
            
<div id="contacto" class="container-fluid contenedor p-0 mt-4">
    <div class="row">
        <div class="col-12 container-contact100">
            <div class="row wrap-contact100">
                <form class="col-12 col-md-10 col-lg-8 contact-form contact100-form form-validate pb-3 pt-0 mx-auto"
                    data-validation="{{$validation}}"
                    action="/contactar"
                    method="post">
                    @csrf
                    <div class="row px-3 pt-lg-5">
                        <span class="col-12 contact100-form-title pb-4 mt-4 pt-3">
                            Envianos un mensaje
                        </span>

                        @if($errors->has('nombre'))
                            <div class="nombre col-12 support-tooltip showed" data-tooltip="{{$errors->first('nombre')}}">
                        @else
                            <div class="nombre col-12">
                        @endif
                            <label class="label-input100 mt-0 mb-3" for="nombre">Nombre</label>
                            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                                <input id="nombre" class="input100" type="text" name="nombre" placeholder="Nombre">
                                <span class="focus-input100"></span>
                            </div>
                        </div>

                        @if($errors->has('correo'))
                            <div class="correo col-12 support-tooltip showed" data-tooltip="{{$errors->first('correo')}}">
                        @else
                            <div class="correo col-12">
                        @endif
                            <label class="label-input100 mt-0 mb-3" for="email">Email *</label>
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input id="email" class="input100" type="text" name="correo" placeholder="email@email.com">
                                <span class="focus-input100"></span>
                            </div>
                        </div>


                        @if($errors->has('telefono'))
                            <div class="telefono col-12 support-tooltip showed" data-tooltip="{{$errors->first('telefono')}}">
                        @else
                            <div class="telefono col-12">
                        @endif
                            <label class="label-input100 mt-0 mb-3" for="phone">Teléfono *</label>
                            <div class="wrap-input100">
                                <input id="phone" class="input100" type="text" name="telefono" placeholder="+54 800 000000">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        
                        @if($errors->has('mensaje'))
                            <div class="mensaje col-12 support-tooltip showed" data-tooltip="{{$errors->first('mensaje')}}">
                        @else
                            <div class="mensaje col-12">
                        @endif
                            <label class="label-input100 mt-0 mb-3" for="message">Mensaje *</label>
                            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                                <textarea id="message" class="input100" name="mensaje" placeholder="Escribenos tu mensaje"></textarea>
                                <span class="focus-input100"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="container-contact100-form-btn">
                                <button class="form-submit contact100-form-btn">
                                    Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12 col-lg-4 contact-data contact100-more flex-col-c-m pt-4">
                    <div class="flex-w size1 p-b-47 mt-3 mt-md-5">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-map-marker"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Dirección
                            </span>

                            <span class="txt2">
                                Huergo 366 6 "A" , Cañitas, CABA
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Telefonó de contacto
                            </span>

                            <span class="txt3">
                                (011) 4772-7679
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Correo de contacto
                            </span>

                            <span class="txt3">
                                info@grupoaxial.org
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="donde-encontrarnos col-12">
    <div class="row justify-content-center px-3">
        <div class="col-12 my-4">
            <h2 class="text-center h2 m-0 text-dark">Ubicación</h2>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.2480796792042!2d-58.434819084771135!3d-34.572588880467585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb59624034bf3%3A0x4c5b8dd6024977f9!2sHuergo%20366%2C%20C1426%20BQF%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1583877457141!5m2!1ses!2sar" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
    <script src="{{asset('ValidationJS/js/Validation.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Rule.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Message.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Requirement.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Validator.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Invalidator.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Form.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Input.js')}}"></script>
    <script src="{{asset('ValidationJS/js/Support.js')}}"></script>
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