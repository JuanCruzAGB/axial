<?php
    /** @var Noticia $noticia */
    /** @var User $user */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/noticia/info.css')}}" rel="stylesheet">
@endsection

@section('title')
    {{$noticia->titulo}}
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3">
        <div class="title mb-3">
            <h1 class="mb-1 p-3">{{$noticia->titulo}}</h1>
        </div>
        <div class="image mb-3">
            <img src="{{asset('storage/' . $noticia->imagen)}}" alt="$noticia->titulo">
        </div>
        <div class="content mb-3">{!!$noticia->contenido!!}</div>
        <div class="d-flex justify-content-end mb-3">
            <div class="date d-flex align-items-center">
                <i class="far fa-clock mr-1"></i>
                <span>{{$noticia->date}}</span>
            </div>
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