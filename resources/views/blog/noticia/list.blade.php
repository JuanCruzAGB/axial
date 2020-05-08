<?php
    /** @var Post[] $noticias */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/noticia/list.css')}}" rel="stylesheet">
    <meta name="asset" content="{{asset('')}}">
@endsection

@section('title')
    Axial - Blog
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="separador separador-title col-12 p-md-5">
        <div class="row">
            <div class="col-12">
                <h2 class="h2-responsive text-white text-center my-4">
                    <span class="text-row">Blog</span>
                </h2>
            </div>
        </div>
    </div>
    @if($count)
        <div class="noticias cards row d-flex justify-content-around mx-3 mt-4 pt-5">
            @foreach($noticias as $noticia)
                <div class="noticia card mb-4 col-12 col-md-6 col-lg-3 col-xl-3 mx-lg-1 p-0 border-0">
                    <a href="/noticia/{{$noticia->slug}}" class="card-img-top">
                        <img src="{{asset('storage/' . $noticia->imagen)}}" alt="{{$noticia->titulo}}">
                    </a>
                    <div class="card-body p-0">
                        <div class="card-footer text-muted mt-3 p-0">{{$noticia->fecha}}</div>
                        <h2 class="preview card-title mt-3">{{$noticia->titulo}}</h2>
                        <div class="preview card-text mt-3">{!!$noticia->contenido!!}</div>
                        <a href="/noticia/{{$noticia->slug}}" class="btn btn-more mt-3"><i class="fas fa-angle-right pr-2 pb-0"></i>Leer más</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 mb-4 pb-5">
            <button class="load-more btn btn-primary mx-auto">Cargar más</button>
        </div>
    @endif
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script src="{{asset('js/blog/noticia/list.js')}}"></script>
@endsection