<?php
    /** @var Post[] $noticias */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/noticia/list.css')}}" rel="stylesheet">
@endsection

@section('title')
    Axial - Blog
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-lg-12 mx-auto pt-3 px-3">
    <h1 class="my-4 text-center blog-h1">Blog</h1>

    @if($count)
        <div class="cards row d-flex justify-content-around">
            @foreach($noticias as $noticia)
                <div class="card mb-4 mx-lg-1 col-12 col-lg-3 col-xl-3 p-0 border-0">
                    <img class="card-img-top px-4" src="{{asset('storage/' . $noticia->imagen)}}" alt="{{$noticia->titulo}}">
                    <div class="card-body">
                    <div class="card-footer text-muted">
                        {{$noticia->fecha}}
                    </div>
                        <h2 class="preview card-title">{{$noticia->titulo}}</h2>
                        <div class="preview card-text mb-3">{!!$noticia->contenido!!}</div>
                        <a href="/noticia/{{$noticia->slug}}" class="btn btn-secondary"><i class="fas fa-angle-right pr-2 pb-0"></i>Leer más</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/list.js')}}"></script>
@endsection