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
    <!-- contenido -->
@endsection

@section('main')
    <!-- contenido -->
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