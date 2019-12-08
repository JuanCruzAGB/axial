<?php
    /** @var array $validations */
    /** @var Categorie[] $categories */
    /** @var Tag[] $tags */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/post/create.css')}}" rel="stylesheet">
    <link href="{{asset('ValidationJS/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/InputFileMaker.css')}}" rel="stylesheet">
@endsection

@section('title')
    Nueva publicación
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div id="new-post" class="new-post col-12 d-flex justify-content-between">
        <section>
            <div class="title">
                <h2 class="mb-3 p-3">Nueva publicación</h2>
            </div>
            <div class="content">
                <form action="/publicacion/crear"
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    data-validation="{{$validation}}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title" class="input-name">
                                    <span class="input-text">Título</span>
                                </label>
                                <input id="title"
                                    name="title"
                                    type="text"
                                    class="form-control"
                                    value="{{old('title')}}"
                                    placeholder="Título">
                                <div @if($errors->has('title'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('title'))
                                        <small>{{$errors->first('title')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_categorie" class="input-name">
                                    <span class="input-text">Categoría</span>
                                </label>
                                <select id="id_categorie"
                                    name="id_categorie"
                                    class="form-control">
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id_categorie}}">{{$categorie->name}}</option>
                                    @endforeach
                                </select>
                                <div @if($errors->has('id_categorie'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('id_categorie'))
                                        <small>{{$errors->first('id_categorie')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-name">
                                    <span class="input-text">Etiquetas</span>
                                </div>
                                @foreach($tags as $tag)
                                    <div class="form-check form-check-inline">
                                        <input id="{{$tag->slug}}"
                                            name="tags[]"
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{$tag->id_tag}}">
                                        <label for="{{$tag->slug}}"
                                            class="form-check-label">{{$tag->name}}</label>
                                    </div>
                                @endforeach
                                <div @if($errors->has('tags'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('tags'))
                                        <small>{{$errors->first('tags')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="make-a-file make-an-image"
                                    type="file"
                                    name="image"
                                    data-text="Imagen"
                                    data-notfound="No se eligió ninguna imagen.">
                                <div @if($errors->has('image'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('image'))
                                        <small>{{$errors->first('image')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="content" class="input-name">
                                    <span class="input-text">Contenido</span>
                                </label>
                                <textarea id="content"
                                    name="content"
                                    class="form-control"
                                    cols="30"
                                    rows="10"
                                    placeholder="Contenido"></textarea>
                                <div @if($errors->has('content'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('content'))
                                        <small>{{$errors->first('content')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="form-submit btn btn-primary">Crear</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
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
    <script type="text/javascript" src="{{asset('js/blog/post/create.js')}}"></script>
@endsection