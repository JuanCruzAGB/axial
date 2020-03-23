<?php
    /** @var array $validations */
    /** @var Category[] $categories */
    /** @var Tag[] $tags */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/post/create.css')}}" rel="stylesheet">
    <link href="{{asset('submodules/ValidationJS/css/styles.css')}}" rel="stylesheet">
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
    <div id="new-post" class="new-post col-12 col-md-10 col-xl-8 mx-auto d-flex justify-content-between pt-3">
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
                                    class="support-box showed"
                                @else
                                    class="support-box"
                                @endif>
                                    @if($errors->has('title'))
                                        <small>{{$errors->first('title')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_category" class="input-name">
                                    <span class="input-text">Categoría</span>
                                </label>
                                <select id="id_category"
                                    name="id_category"
                                    class="form-control">
                                    @foreach($categories as $category)
                                        @if(old('id_category') == $category->id_category)
                                            <option value="{{$category->id_category}}" selected>{{$category->name}}</option>
                                        @else
                                            <option value="{{$category->id_category}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <div @if($errors->has('id_category'))
                                    class="support-box showed"
                                @else
                                    class="support-box"
                                @endif>
                                    @if($errors->has('id_category'))
                                        <small>{{$errors->first('id_category')}}</small>
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
                                        @if(is_array(old('tags')) && in_array($tag->id_tag, old('tags')))
                                            <input id="{{$tag->slug}}"
                                                name="tags[]"
                                                class="form-check-input"
                                                type="checkbox"
                                                checked
                                                value="{{$tag->id_tag}}">
                                        @else
                                            <input id="{{$tag->slug}}"
                                                name="tags[]"
                                                class="form-check-input"
                                                type="checkbox"
                                                value="{{$tag->id_tag}}">
                                        @endif
                                        <label for="{{$tag->slug}}"
                                            class="form-check-label">{{$tag->name}}</label>
                                    </div>
                                @endforeach
                                <div @if($errors->has('tags'))
                                    class="support-box showed"
                                @else
                                    class="support-box"
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
                                    class="support-box showed"
                                @else
                                    class="support-box"
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
                                    class="form-control ckeditor"
                                    cols="30"
                                    rows="10"
                                    placeholder="Contenido">{!!old('content')!!}</textarea>
                                <div @if($errors->has('content'))
                                    class="support-box showed"
                                @else
                                    class="support-box"
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
    <!-- <script type="text/javascript" src="{{asset('submodules/ValidationJS/js/Validation.js')}}"></script>
    <script type="text/javascript" src="{{asset('submodules/ValidationJS/js/Rules.js')}}"></script>
    <script type="text/javascript" src="{{asset('submodules/ValidationJS/js/Messages.js')}}"></script>
    <script type="text/javascript" src="{{asset('submodules/ValidationJS/js/Requirements.js')}}"></script>
    <script type="text/javascript" src="{{asset('submodules/ValidationJS/js/Validator.js')}}"></script>
    <script type="text/javascript" src="{{asset('submodules/ValidationJS/js/Invalidator.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('js/InputFileMaker.js')}}"></script>
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/blog/post/create.js')}}"></script>
@endsection