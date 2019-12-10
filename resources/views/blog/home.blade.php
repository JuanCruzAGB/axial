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
    <div class="tabs col-12 d-flex justify-content-between">
        <div class="tab-menu p-2">
            <ul class="d-flex justify-content-around m-0 p-0">
                <li class="mb-2"><a class="tab-button opened" href="#posts">
                    <i class="tab-icon fas fa-edit"></i>
                    <span class="tab-text p-2">Publicaciones</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#new-post">
                    <i class="tab-icon fas fa-images"></i>
                    <span class="tab-text p-2">Nueva publicación</span>
                </a></li>
                <li><a class="tab-button" href="#categories">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Categorias</span>
                </a></li>
                <li><a class="tab-button" href="#new-categorie">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Nueva categoría</span>
                </a></li>
                <li><a class="tab-button" href="#tags">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Etiquetas</span>
                </a></li>
                <li><a class="tab-button" href="#new-tag">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Nueva etiqueta</span>
                </a></li>
                <li><a class="tab-button" href="#profile">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Mí Perfil</span>
                </a></li>
                <li><a class="tab-button" href="#config">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Configuración</span>
                </a></li>
            </ul>
        </div>
        <div class="tab-body pl-md-3 pt-3 pt-lg-0">
            <div id="posts" class="posts tab-content opened">
                @component('blog.components.posts', ['posts' => $data['posts'], 'count' => $counts['posts']])
                @endcomponent
            </div>
            <div id="new-post" class="new-post tab-content">
                @component('blog.components.new-post', ['validation' => $validations['post'], 'categories' => $data['categories'], 'tags' => $data['tags']])
                @endcomponent
            </div>
            <div id="categories" class="categories tab-content">
                @component('blog.components.categories', ['categories' => $data['categories']])
                @endcomponent
            </div>
            <div id="new-categorie" class="new-categorie tab-content">
                @component('blog.components.new-categorie', ['validation' => $validations['categorie']])
                @endcomponent
            </div>
            <div id="tags" class="tags tab-content">
                @component('blog.components.tags', ['tags' => $data['tags']])
                @endcomponent
            </div>
            <div id="new-tag" class="new-tag tab-content">
                @component('blog.components.new-tag', ['validation' => $validations['tag']])
                @endcomponent
            </div>
            <div id="profile" class="profile tab-content">
                @component('blog.components.profile', ['posts' => $data[Auth::user()->id_user . ''], 'count' => $counts[Auth::user()->id_user . '']])
                @endcomponent
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
    <script type="text/javascript" src="{{asset('js/blog/home.js')}}"></script>
@endsection