<?php
    /** @var array $validations */
    /** @var User $user */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/user/edit.css')}}" rel="stylesheet">
    <link href="{{asset('ValidationJS/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/InputFileMaker.css')}}" rel="stylesheet">
@endsection

@section('title')
    Editar "{{$user->name}}"
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div id="edit-user" class="edit-user col-12 col-md-10 col-xl-8 mx-auto d-flex justify-content-between">
        <section>
            <div class="title">
                <h2 class="mb-3 p-3">Editar "{{$user->name}}"</h2>
            </div>
            <div class="content">
                <form action="/usuario/{{$user->id_user}}/editar"
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    data-validation="{{$validation}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" class="input-name">
                                    <span class="input-text">Nombre</span>
                                </label>
                                <input id="name"
                                    name="name"
                                    type="text"
                                    class="form-control"
                                    value="{{old('name', $user->name)}}"
                                    placeholder="Nombre">
                                <div @if($errors->has('name'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('name'))
                                        <small>{{$errors->first('name')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" class="input-name">
                                    <span class="input-text">Correo</span>
                                </label>
                                <input id="email"
                                    name="email"
                                    type="text"
                                    class="form-control"
                                    value="{{old('email', $user->email)}}"
                                    placeholder="Correo">
                                <div @if($errors->has('email'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('email'))
                                        <small>{{$errors->first('email')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" class="input-name">
                                    <span class="input-text">Clave</span>
                                </label>
                                <input id="password"
                                    name="password"
                                    type="text"
                                    class="form-control"
                                    placeholder="Clave">
                                <div @if($errors->has('password'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('password'))
                                        <small>{{$errors->first('password')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" class="input-name">
                                    <span class="input-text">Confirmar clave</span>
                                </label>
                                <input id="password_confirmation"
                                    name="password_confirmation"
                                    type="text"
                                    class="form-control"
                                    placeholder="Confirmar clave">
                                <div @if($errors->has('password_confirmation'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('password_confirmation'))
                                        <small>{{$errors->first('password_confirmation')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="make-a-file make-an-image"
                                    type="file"
                                    name="picture"
                                    data-text="Imagen"
                                    data-src="{{asset('storage/' . $user->picture)}}"
                                    data-notfound="{{$user->name}} picture">
                                <div @if($errors->has('picture'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('picture'))
                                        <small>{{$errors->first('picture')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" class="input-name">
                                    <span class="input-text">Título de presentación</span>
                                </label>
                                <input id="title"
                                    name="title"
                                    type="text"
                                    class="form-control"
                                    value="{{old('title', $user->presentation->title)}}"
                                    placeholder="Título de presentación">
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
                                <label for="content" class="input-name">
                                    <span class="input-text">Descripción de presentación</span>
                                </label>
                                <textarea id="content"
                                    name="content"
                                    class="form-control ckeditor"
                                    cols="30"
                                    rows="10"
                                    placeholder="Descripción de presentación">{!!old('content', $user->presentation->content)!!}</textarea>
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
                            <button type="submit" class="form-submit btn btn-primary">Editar</button>
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
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/blog/user/edit.js')}}"></script>
@endsection