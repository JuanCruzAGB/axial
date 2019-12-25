<?php
    /** @var Post[] $noticias */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/noticia/list.css')}}" rel="stylesheet">
@endsection

@section('title')
    Noticias
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3">
        <div class="title">
            <h1 class="mb-3">Listado de noticias</h1>
        </div>
        @if($count)
            @foreach($noticias as $noticia)
                <div class="post row">
                    <div class="title col-12">
                        <h2 class="mb-3 p-3">{{$noticia->titulo}}</h2>
                    </div>
                    <div class="image col-12 mb-3">
                        <img src='{{asset("storage/$noticia->imagen")}}' alt="{{$noticia->titulo}} image" class="post-image"/>
                    </div>
                    <div class="preview col-12 mb-3 p-0 pl-3 pr-4">{!!$noticia->contenido!!}</div>
                    <div class="d-flex justify-content-between col-12 mb-3">
                        <div class="d-flex">
                            <div class="picture px-0 mr-1">
                                <img class="picture-image" src='{{asset("storage/" . $noticia->user->picture)}}' alt="{{$noticia->user->name}} profile's picture">
                            </div>
                            <div class="title d-flex align-items-center p-0">
                                <span class="mr-1">Por:</span>
                                <a href="/usuario/{{$noticia->user->slug}}">{{$noticia->user->name}}</a>
                            </div>
                        </div>
                        <div class="date d-flex align-items-center">
                            <i class="far fa-clock mr-1"></i>
                            <span>{{$noticia->date}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/noticia/list.js')}}"></script>
@endsection