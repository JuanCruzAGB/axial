<?php
    /** @var Post[] $noticias */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/noticia/list.css')}}" rel="stylesheet">
@endsection

@section('title')
    Blog
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-lg-12 mx-auto pt-3 px-3">
       <!--  <div class="title">
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
        </div> -->
        <!-- Page Content -->



  <!-- Blog Entries Column -->

    <h1 class="my-4 text-center">Noticias</h1>

    <!-- Blog Post -->
    <div class="cards row d-flex justify-content-around">
        <div class="card mb-4  mx-lg-1 col-12 col-lg-3 p-0">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">Titulo de la noticia</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Leer más &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posteado el 4 de enero, 2033
        </div>
        </div>
        <div class="card mb-4 mx-lg-1 col-12 col-lg-3 p-0">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">Titulo de la noticia</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Leer más &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posteado el 4 de enero, 2033
        </div>
        </div>
        <div class="card mb-4 mx-lg-1  col-12 col-lg-3 p-0">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">Titulo de la noticia</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Leer más &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posteado el 4 de enero, 2033
        </div>
        </div>
        <div class="card mb-4 mx-lg-1  col-12 col-lg-3 p-0">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Titulo de la noticia</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Leer más &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posteado el 4 de enero, 2033
            </div>
        </div>
        <div class="card mb-4 mx-lg-1  col-12 col-lg-3 p-0">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Titulo de la noticia</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Leer más &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posteado el 4 de enero, 2033
            </div>
        </div>
        <div class="card mb-4 mx-lg-1  col-12 col-lg-3 p-0">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Titulo de la noticia</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Leer más &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posteado el 4 de enero, 2033
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/list.js')}}"></script>
@endsection