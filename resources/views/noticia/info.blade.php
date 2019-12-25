<?php
    /** @var Noticia $noticia */
    /** @var User $user */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/noticia/info.css')}}" rel="stylesheet">
@endsection

@section('title')
    {{$noticia->titulo}}
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <aside class="image m-auto" style='background: url({{asset("storage/$noticia->imagen")}}) no-repeat center top; background-attachment: fixed;'></aside>
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3">
        <div class="title">
            <h1 class="mb-1 p-3">{{$noticia->titulo}}</h1>
        </div>
        <div class="content mb-3">{!!$noticia->contenido!!}</div>
        <div class="d-flex justify-content-between mb-3">
            <div class="d-flex">
                <div class="picture px-0 mr-1">
                    <img class="picture-image" src='{{asset("storage/$user->picture")}}' alt="{{$user->name}} profile's picture">
                </div>
                <div class="title d-flex align-items-center p-0">
                    <span class="mr-1">Por:</span>
                    <a href="/usuario/{{$user->slug}}">{{$user->name}}</a>
                </div>
            </div>
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
    <script type="text/javascript" src="{{asset('js/noticia/info.js')}}"></script>
@endsection