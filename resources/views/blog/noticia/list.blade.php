<?php
    /** @var Post[] $noticias */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/noticia/list.css')}}" rel="stylesheet">
@endsection

@section('title')
    Noticias
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3 px-3">
        <div class="title">
            <h1 class="mb-3">Listado de noticias</h1>
        </div>
        <div class="row mx-0">
            @if($count)
                @foreach($noticias as $noticia)
                    <a href="/noticia/{{$noticia->slug}}" class="post col-12 col-lg-4">
                        <div class="row py-3 py-md-0 mb-3">
                            <div class="image col-4 col-md-8 col-lg-12 mb-3 pl-md-0 p-lg-0">
                                <img src='{{asset("storage/$noticia->imagen")}}' alt="{{$noticia->titulo}} image"/>
                            </div>
                            <div class="title col-8 col-md-12 p-md-3 mb-md-3">
                                <h2 data-text="{{$noticia->titulo}}" class="mb-3 mb-md-0">{{$noticia->titulo}}</h2>
                            </div>
                            <div class="preview col-12 col-md-4 col-lg-12 mb-3 p-0 px-3 pr-md-0 p-lg-0">{!!$noticia->contenido!!}</div>
                            <div class="date d-flex justify-content-end col-12 pr-md-0">
                                <div class="d-flex align-items-center">
                                    <i class="far fa-clock mr-1"></i>
                                    <span>{{$noticia->date}}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/list.js')}}"></script>
@endsection