<?php
    /** @var array $validation */
    /** @var Miembro $miembro */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('ValidationJS/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/InputFileMaker.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog/miembro/edit.css')}}" rel="stylesheet">
@endsection

@section('title')
    Editar "{{$miembro->nombre}}"
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div id="edit-post" class="edit-post col-12 col-md-10 col-xl-8 mx-auto d-flex justify-content-between pt-3">
        <section>
            <div class="title">
                <h2 class="mb-3 p-3">Editar "{{$miembro->nombre}}"</h2>
            </div>
            <div class="content">
                <form action="/miembro/{{$miembro->id_miembro}}/editar"
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    data-validation="{{$validation}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre" class="input-name">
                                    <span class="input-text">Nombre</span>
                                </label>
                                <input id="nombre"
                                    name="nombre"
                                    type="text"
                                    class="form-control"
                                    value="{{old('nombre', $miembro->nombre)}}"
                                    placeholder="Nombre">
                                <div @if($errors->has('nombre'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('nombre'))
                                        <small>{{$errors->first('nombre')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="titulo" class="input-name">
                                    <span class="input-text">Título</span>
                                </label>
                                <input id="titulo"
                                    name="titulo"
                                    type="text"
                                    class="form-control"
                                    value="{{old('titulo', $miembro->titulo)}}"
                                    placeholder="Título">
                                <div @if($errors->has('titulo'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('titulo'))
                                        <small>{{$errors->first('titulo')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="puesto" class="input-name">
                                    <span class="input-text">Puesto</span>
                                </label>
                                <input id="puesto"
                                    name="puesto"
                                    type="text"
                                    class="form-control"
                                    value="{{old('puesto', $miembro->puesto)}}"
                                    placeholder="Puesto">
                                <div @if($errors->has('puesto'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('puesto'))
                                        <small>{{$errors->first('puesto')}}</small>
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
                                    data-src="{{asset('storage/' . $miembro->imagen)}}"
                                    data-notfound='Imagen del miembro del equipo: "{{$miembro->nombre}}"'>
                                <div @if($errors->has('imagen'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('imagen'))
                                        <small>{{$errors->first('imagen')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="estudios form-group mb-0 pr-3">
                                <label class="input-name">
                                    <span class="input-text">Estudios</span>
                                </label>
                                @if(old('estudios'))
                                    @for($i = 0; $i < count(old('estudios')); $i++)
                                        <div class="row d-flex justify-content-between mb-3">
                                            <div class="col-8">
                                                <input name="estudios[]"
                                                    type="text"
                                                    class="form-control"
                                                    value="{{old('estudios.' . $i)}}"
                                                    placeholder="Estudio">
                                            </div>
                                            @if(($i + 1) < count(old('estudios')))
                                                <div class="col-2">
                                                    <button class="less-button">
                                                        <i class="button-icon fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="col-2">
                                                    <button class="add-button">
                                                        <i class="button-icon fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                    @endfor
                                @else
                                    @for($i = 0 ; $i < count($estudios); $i ++)
                                        <div class="row d-flex justify-content-between mb-3">
                                            <div class="col-8">
                                                <input name="estudios[]"
                                                    type="text"
                                                    class="form-control"
                                                    value="{{$estudios[$i]->titulo}}"
                                                    placeholder="Estudio">
                                            </div>
                                            @if(($i + 1) < count($estudios))
                                                <div class="col-2">
                                                    <button class="less-button">
                                                        <i class="button-icon fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            @else
                                                <div class="col-2">
                                                    <button class="add-button">
                                                        <i class="button-icon fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                    @endfor
                                @endif
                                <div @if($errors->has('estudios') || $errors->has('estudios.*'))
                                    class="invalid-tooltip showed mb-3"
                                @else
                                    class="invalid-tooltip mb-3"
                                @endif>
                                    @if($errors->has('estudios'))
                                        <small>{{$errors->first('estudios')}}</small>
                                    @elseif($errors->has('estudios.*'))
                                        <small>{{$errors->first('estudios.*')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cv" class="input-name">
                                    <span class="input-text">CV</span>
                                </label>
                                <textarea id="cv"
                                    name="cv"
                                    class="form-control ckeditor"
                                    cols="30"
                                    rows="10"
                                    placeholder="CV">{!!old('cv', $miembro->cv)!!}</textarea>
                                <div @if($errors->has('cv'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('cv'))
                                        <small>{{$errors->first('cv')}}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="link" class="input-name">
                                    <span class="input-text">Link</span>
                                </label>
                                <input id="link"
                                    name="link"
                                    type="text"
                                    class="form-control"
                                    value="{{old('link', $miembro->link)}}"
                                    placeholder="Link">
                                <div @if($errors->has('link'))
                                    class="invalid-tooltip showed"
                                @else
                                    class="invalid-tooltip"
                                @endif>
                                    @if($errors->has('link'))
                                        <small>{{$errors->first('link')}}</small>
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
    <script type="text/javascript" src="{{asset('js/blog/miembro/edit.js')}}"></script>
@endsection