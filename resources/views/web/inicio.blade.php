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
<div class="jumbotron jumbotron-fluid p-0">
    <div class="container">
        <h2 class="h2-responsive text-white text-center pt-4">Abordamos todas las dolencias y patologías <span>de la columna</span></h2>
        <div class="d-flex justify-content-center">
            <a name="" id="" class="enviar-mensaje btn btn-primary mt-4" href="#" role="button">Envianos un mensaje</a>
        </div>
        
    </div>
</div>
@endsection

@section('main')
        
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