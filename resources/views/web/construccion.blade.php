<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="">

        <!-- Font Awesome -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
        
        <!-- Fuentes -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> -->

        <!-- Bootstrap 4.3.1-->
        <!-- <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet"> -->
      
	    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	
        <!-- Mi CSS -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">       
        <link href="{{ asset('css/web/construccion.css') }}" rel="stylesheet">     
        <title>Title</title>
        <style>
            .logo{
                width: 10rem;
                border-radius: .75rem;
                margin: 2rem 0;
            }

            h1{
                font-size: 2rem !important;
                margin-bottom: 1.5rem;
            }

            h2{
                font-size: 1.3rem !important;
            }

            h3{
                font-size: 1.3rem !important;
            }

            .socialMedia i{
                font-size: 1.8rem;
                height: 3rem;
                width: 3rem;
            }

                /* MD */
                @media(min-width: 768px){
                .logo{
                    width: 12rem;
                    border-radius: .75rem;
                }
            }

            @media(min-width: 1024px){
                .logo{
                    width: 12rem;
                    border-radius: .75rem;
                }
                    
                h1{
                    font-size: 3rem !important;
                }

                h2{
                    font-size: 1.5rem !important;
                }

                h3{
                    font-size: 1.5rem !important;
                }

                .__coverPage-content p{
                    font-size: 1.1rem;
                }
            }
        </style>
    </head>
    <body>
       <!--  <div class="container-fluid">
            <div class="row">
                <div class="background-construction">
                <h1>Title</h1>
                    <div class="text-div card mt-4 m-auto text-center">
                        <div class="card-body frase">
                            <p class="card-text">El sitio estará listo pronto</p>
                        </div>
                        <div class="card-body contacto">
                            <p class="card-text">ejemplo@correo.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="coverPage">
        
            <div class="__coverPage-content">
            <img src="/img/logo.jpg" class="img-fluid logo" alt="Responsive image">
                <h1>Medicina especializada en Columna</h1>
                <h3>Sitio web en construcción</h3>
                <p class="info">info@grupoaxial.org <br>
                (011) 4772-7679 <br>
                Huergo 366 6 "A" , Cañitas, CABA</p>
                <div class="socialMedia">
                    <a class="socialIcon" href="mailto:yourEmail@yourDomain.com"><i class="fas fa-envelope"></i></a>
                    <a target="_blank" class="socialIcon" href="https://wa.me/+541123539011">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bootstrap Ukit -->
        <!-- <script type="text/javascript" src="{{ asset('js/jquery-popper/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-popper/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>   -->

        <!-- Mi JS -->      
        <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/web/construccion.js') }}"></script>
    </body>
</html>