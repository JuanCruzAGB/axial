@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/inicio.css')}}" rel="stylesheet">
@endsection

@section('titulo')
    Blog
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

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/inicio.js')}}"></script>
@endsection