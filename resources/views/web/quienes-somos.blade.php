<?php
    /** @var Miembro[] $miembros */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/web/quienes.css')}}" rel="stylesheet">
@endsection

@section('title')
    Axial - Quiénes Somos
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3 mb-5">
        <h1 class="my-5 pb-lg-4 text-center">Quiénes Somos</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="/img/quienes/01-equipo.jpg" alt="El equipo">
            </div>
            <div class="col-12 col-md-6">
                <p></p>
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