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
        <img class="img-fluid rounded" src="{{asset('storage/' . $noticia->imagen)}}" alt="{{$noticia->titulo}}">
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