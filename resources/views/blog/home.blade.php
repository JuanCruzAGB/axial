<?php
    /** @var array $validations */
    /** @var array $data */
    /** @var array $counts */
?>
@extends('layout.index')

@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{asset('css/blog/home.css')}}" rel="stylesheet">
    <link href="{{asset('ValidationJS/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/InputFileMaker.css')}}" rel="stylesheet">
@endsection

@section('title')
    Blog
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="tabs col-12 d-flex justify-content-between pt-3">
        <div class="tab-menu p-2">
            <ul class="d-flex justify-content-around m-0 p-0">
                <li class="mb-2"><a class="tab-button opened" href="#posts">
                    <i class="tab-icon fas fa-file"></i>
                    <span class="tab-text p-2">Noticias</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#new-post">
                    <i class="tab-icon fas fa-plus"></i>
                    <span class="tab-text p-2">Nueva noticia</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#miembros">
                    <i class="tab-icon fas fa-file"></i>
                    <span class="tab-text p-2">Miembros del equipo</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#nuevo-miembro">
                    <i class="tab-icon fas fa-plus"></i>
                    <span class="tab-text p-2">Nuevo miembro</span>
                </a></li>
                <li><a class="tab-button" href="#config">
                    <i class="tab-icon fas fa-cog"></i>
                    <span class="tab-text p-2">Configuración</span>
                </a></li>
            </ul>
        </div>
        <div class="tab-body pl-md-3 pt-3 pt-md-0">
            <div id="posts" class="posts tab-content opened">
                @component('blog.components.posts', ['posts' => $data['posts'], 'count' => $counts['posts']])
                @endcomponent
            </div>
            <div id="new-post" class="new-post tab-content">
                @component('blog.components.new-post', ['validation' => $validations['post'], 'categories' => $data['categories'], 'tags' => $data['tags']])
                @endcomponent
            </div>
            <div id="miembros" class="miembros tab-content opened">
                <!--Componente de miembros-->
            </div>
            <div id="nuevo-miembro" class="nuevo-miembro tab-content">
                <!--Componente de nuevo miembros-->
            </div>
            <div id="config" class="config tab-content">
                @component('blog.components.config')
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@section('extras')
    @component('blog.components.modal.delete')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <!-- <script type="text/javascript" src="{{asset('ValidationJS/js/Validation.js')}}"></script>
    <script type="text/javascript" src="{{asset('ValidationJS/js/Rules.js')}}"></script>
    <script type="text/javascript" src="{{asset('ValidationJS/js/Messages.js')}}"></script>
    <script type="text/javascript" src="{{asset('ValidationJS/js/Requirements.js')}}"></script>
    <script type="text/javascript" src="{{asset('ValidationJS/js/Validator.js')}}"></script>
    <script type="text/javascript" src="{{asset('ValidationJS/js/Invalidator.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('js/InputFileMaker.js')}}"></script>
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/blog/home.js')}}"></script>
@endsection