@extends('layout.index')

@section('css')
    <link href="{{asset('css/web/inicio.css')}}" rel="stylesheet">
@endsection

@section('title')
    Title
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('banner')
<div class="jumbotron jumbotron-fluid p-0 mb-0">
    <div class="container">
        <div>
            <h2 class="h2-responsive text-white text-center pt-5">Abordamos todas las dolencias y patologías <span>de la columna</span></h2>
        </div>
        <div class="d-flex justify-content-center">
            <a name="" id="" class="enviar-mensaje btn btn-primary mt-4" href="#" role="button">Envianos un mensaje</a>
        </div>
    </div>
</div>
@endsection

@section('main')
<div class="jumbotron-dos jumbotron-fluid p-0 m-0 contenedor">
        <div class="container">
            <h2 class="h2-responsive text-white text-center">El dolor de espalda es un problema que afecta al 80% de la población mundial.</h2>
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