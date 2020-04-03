@extends('layout.index')

@section('css')
    <link href="{{ asset('css/correo/gracias.css') }}" rel="stylesheet">
@endsection

@section('titile')
    Muchas Gracias
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('banner')
    <div class="jumbotron card card-image d-lg-block m-0 px-0 col-12"
    style="background: url(/img/recursos/thanks.jpg) no-repeat center center;">
        <div class="text-white text-center py-3 p-0 gracias-div">
            <div class="py-md-5">
                <h2 class="card-title h1-responsive p-0 mb-4 mt-lg-4 font-weight-bold text-white">
                    <strong>¡Muchas Gracias!</strong>
                </h2>
                <p class="mb-4 text-white">Te responderemos en la brevedad.</p>
                <a class="btn btn-lg btn-outline-primary volverBtn mt-lg-4">Regresar al Inicio</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection