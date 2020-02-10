<?php
    /** @var array $validations */
    /** @var array $data */
    /** @var array $counts */
?>
@extends('layout.index')

@section('css')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{asset('css/blog/panel.css')}}" rel="stylesheet">
    <link href="{{asset('css/web/panel.css')}}" rel="stylesheet">
    <link href="{{asset('public/ValidationJS/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/InputFileMaker.css')}}" rel="stylesheet">
@endsection

@section('title')
    Panel de administración
@endsection

@section('nav')
    @component('components.nav.panel')
    @endcomponent
@endsection

@section('main')
    <div class="tabs col-12 d-flex justify-content-between p-0">
        <div class="tab-menu p-2 pt-5">
            <ul class="d-flex justify-content-around m-0 p-0">
                <li class="mb-2"><a class="tab-button opened" href="#noticias">
                    <i class="tab-icon fas fa-file"></i>
                    <span class="tab-text p-2">Noticias</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#nueva-noticia">
                    <i class="tab-icon fas fa-plus"></i>
                    <span class="tab-text p-2">Nueva noticia</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#miembros">
                    <i class="tab-icon fas fa-user-friends"></i>
                    <span class="tab-text p-2">Miembros del equipo</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#nuevo-miembro">
                    <i class="tab-icon fas fa-plus"></i>
                    <span class="tab-text p-2">Nuevo miembro</span>
                </a></li>
            </ul>
        </div>
        <div class="tab-body pt-3 pt-md-5">
            <div id="noticias" class="noticias tab-content opened">
                @component('blog.components.noticias', ['noticias' => $data['noticias'], 'count' => $counts['noticias']])
                @endcomponent
            </div>
            <div id="nueva-noticia" class="nueva-noticia tab-content">
                @component('blog.components.nueva-noticia', ['validation' => $validations['noticia']])
                @endcomponent
            </div>
            <div id="miembros" class="miembros tab-content">
                @component('blog.components.miembros', ['miembros' => $data['miembros'], 'count' => $counts['miembros']])
                @endcomponent
            </div>
            <div id="nuevo-miembro" class="nuevo-miembro tab-content">
                @component('blog.components.nuevo-miembro', ['validation' => $validations['miembro']])
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
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Validation.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Form.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Input.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Rule.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Requirement.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Message.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Validator.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/ValidationJS/js/Invalidator.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/InputFileMaker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/blog/panel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/web/panel.js')}}"></script>
@endsection