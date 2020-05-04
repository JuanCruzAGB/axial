<?php
    /** @var Noticia $noticia */
    /** @var User $user */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/noticia/info.css')}}" rel="stylesheet">
@endsection

@section('title')
    Axial - {{$noticia->titulo}}
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3 mb-5">
        <h1 class="mt-5">{{$noticia->titulo}}</h1>
        <p>{{$noticia->fecha}}</p>
    </section>
    <div class="separador separador-image col-12 p-0">
        <div style="background: url({{asset('storage/' . $noticia->imagen)}}) no-repeat center center; background-attachment: fixed; background-size: cover;" class="separador separador-image col-12 p-md-5"></div>
    </div>
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3 mb-5">
        <div class="my-5">
            {!!$noticia->contenido!!}
        </div>
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/info.js')}}"></script>
@endsection