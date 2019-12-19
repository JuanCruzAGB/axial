@extends('layout.index')

@section('css')
    <link href="{{asset('css/galeria/baguetteBox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/galeria/grid/gallery-grid.css')}}" rel="stylesheet">
    <link href="{{asset('css/web/inicio.css')}}" rel="stylesheet">
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
        <p class="col-12 col-md-10 col-lg-8 text-white text-center m-0 py-4 py-lg-2 px-md-5">El dolor de espalda es un problema que afecta al 80% de la población mundial.</p>
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

    <!-- <div class="row text-white d-flex justify-content-center contacto">
    <div class="info-fondo d-flex justify-content-center align-items-center">
        <ul class="pt-5 text-center">
            <li class="my-4">
                <i class="fas fa-map-marker-alt mx-2"></i>
                Adress
            </li>

            <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, possimus!</p>

            <li class="my-4">
                <i class="fas fa-phone-volume mx-2"></i>
                Let's Talk
            </li>
            <p class="text-primary">0800-444-777</p>
            
            <li class="my-4">
                <i class="far fa-envelope mx-2"></i>
                General Support
            </li>
            <p class="text-primary pb-5">digitalo@solutions.com</p>
        </ul>
    </div> -->

    <div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Envianos un mensaje
				</span>

				<label class="label-input100" for="nombre">Nombre *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="nombre" class="input100" type="text" name="nombre" placeholder="Nombre">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="email@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Teléfono</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="+54 800 000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Mensaje *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Escribenos tu mensaje"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
        
       <!--  <form class="bg-white text-dark w-100">
            <h2 class="text-dark text-center py-4">Envianos un mensaje</h2>
            <div class="form-group w-75 mx-auto">
                <label for="nombre">Nombre</label>
                <input type="nombre" class="form-control" id="nombre" placeholder="Nombre">
            </div>

            <div class="form-group w-75 mx-auto">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@email.com">
            </div>

            <div class="form-group w-75 mx-auto">
                <label for="telefono">Teléfono</label>
                <input type="telefono" class="form-control" id="telefono" placeholder="+54 11-5948-2284">
            </div>

            <div class="form-group text-left">
                <label for="textarea">Mensaje</label>
                <textarea class="form-control w-75 mx-auto" id="textarea" rows="3"></textarea>
            </div>


            <div class="d-flex justify-content-center mb-4">
               <button type="submit" class="btn btn-primary text-uppercase">Enviar mensaje</button>
            </div>
        </form>
    </div> -->
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