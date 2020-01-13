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
        <!-- <div class="title mb-3">
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
            <!-- Title -->
        <h1 class="mt-5">Titulo de la noticia</h1>

        <!-- autor -->
        <p class="lead">
        by
        <a href="#">Archimak</a>
        </p>

        <hr>

        <!-- fecha del posteo -->
        <p>Posted el 1 de Enero, 2020 at 11:00 PM</p>

        <hr>

        <!-- imagen -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- contenido -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/noticia/info.js')}}"></script>
@endsection