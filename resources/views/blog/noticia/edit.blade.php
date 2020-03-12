<?php
    /** @var array $validation */
    /** @var Noticia $noticia */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('ValidationJS/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/InputFileMaker.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog/noticia/edit.css')}}" rel="stylesheet">
@endsection

@section('title')
    Editar "{{$noticia->titulo}}"
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="title editar-h1 d-flex justify-content-center ml-5">
        <h1 class="mt-5 p-3">Editar noticia</h1>
    </div>
    <div id="edit-post" class="edit-post col-12 col-md-10 col-xl-8 mx-auto d-flex justify-content-between pt-3 mt-3 mb-5">
        
        <div class="content px-3">
        <form action="/noticia/crear"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="titulo form-group">
                        <label for="noticia_titulo" class="input-name">
                            <span class="input-text">Título *</span>
                        </label>
                        <input id="noticia_titulo"
                            name="titulo"
                            type="text"
                            class="form-control mb-3 w-75"
                            value="{{old('titulo')}}"
                            placeholder="Título">
                        <div @if($errors->has('titulo'))
                            class="support-box showed"
                        @else
                            class="support-box"
                        @endif>
                            @if($errors->has('titulo'))
                                <small>{{$errors->first('titulo')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="imagen form-group">
                        <input class="make-a-file make-an-image w-75"
                            type="file"
                            name="imagen"
                            data-text="Imagen"
                            data-notfound="No se eligió ninguna imagen.">
                        <div @if($errors->has('imagen'))
                            class="support-box showed mt-3"
                        @else
                            class="support-box mt-3"
                        @endif>
                            @if($errors->has('imagen'))
                                <small>{{$errors->first('imagen')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenido form-group">
                        <label class="input-name">
                            <span class="input-text">Contenido *</span>
                        </label>
                        <textarea id="contenido"
                            name="contenido"
                            class="form-control ckeditor w-75"
                            cols="30"
                            rows="10"
                            placeholder="Contenido">{!!old('contenido')!!}</textarea>
                        <div @if($errors->has('contenido'))
                            class="mt-3 support-box showed mt-3"
                        @else
                            class="mt-3 support-box mt-3"
                        @endif>
                            @if($errors->has('contenido'))
                                <small>{{$errors->first('contenido')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="form-submit btn btn-primary crear-noticia">Editar</button>
                </div>
            </div>
        </form>
    </div>
    </div>



    <!-- <section>
            <div class="title">
                <h2 class="mb-3 p-3">Editar "{{$noticia->titulo}}"</h2>
            </div>
            <div class="content">
                <form action="/noticia/{{$noticia->id_noticia}}/editar"
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    data-validation="{{$validation}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="titulo" class="input-name">
                                    <span class="input-text">Título</span>
                                </label>
                                <input id="titulo"
                                    name="titulo"
                                    type="text"
                                    class="form-control"
                                    value="{{old('titulo', $noticia->titulo)}}"
                                    placeholder="Título">
                                <div @if($errors->has('titulo'))
                                    class="support-box showed"
                                @else
                                    class="support-box"
                                @endif>
                                    @if($errors->has('titulo'))
                                        <small>{{$errors->first('titulo')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="make-a-file make-an-image"
                                    type="file"
                                    name="imagen"
                                    data-text="Imagen"
                                    data-src="{{asset('storage/' . $noticia->imagen)}}"
                                    data-notfound='Imagen de la noticia: "{{$noticia->titulo}}"'>
                                <div @if($errors->has('imagen'))
                                    class="support-box showed"
                                @else
                                    class="support-box"
                                @endif>
                                    @if($errors->has('imagen'))
                                        <small>{{$errors->first('imagen')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contenido" class="input-name">
                                    <span class="input-text">Contenido</span>
                                </label>
                                <textarea id="contenido"
                                    name="contenido"
                                    class="form-control ckeditor"
                                    cols="30"
                                    rows="10"
                                    placeholder="Contenido">{!!old('contenido', $noticia->contenido)!!}</textarea>
                                <div @if($errors->has('contenido'))
                                    class="support-box showed"
                                @else
                                    class="support-box"
                                @endif>
                                    @if($errors->has('contenido'))
                                        <small>{{$errors->first('contenido')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="form-submit btn btn-primary">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section> -->
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
    <script type="text/javascript" src="{{asset('js/blog/noticia/edit.js')}}"></script>
@endsection