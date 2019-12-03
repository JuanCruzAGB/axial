<?php
    /** @var array $validation */
    /** @var Categorie $categorie */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/Validation.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog/categorie/edit.css')}}" rel="stylesheet">
@endsection

@section('title')
    Editar categoría "{{$categorie->name}}"
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="editar col-12 col-md-10 col-lg-8">
        <div class="title">
            <h2>Editar categoría "{{$categorie->name}}"</h2>
        </div>
        <form action="/categoria/{{$categorie->id_categorie}}/editar"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group form-group-sm col-12 mb-3">
                    <label for="name" class="input-name m-0 p-0">
                        <span class="input-text">Nombre</span>
                    </label>
                    <input id="name"
                        name="name"
                        type="text"
                        class="form-control m-0 p-2"
                        value="{{old('name', $categorie->name)}}"
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

                <div class="col-12 d-flex justify-content-end">
                    <button class="form-submit btn btn-primary"
                        type="submit"
                        name="action">Editar
                        <i class="submit-icon fas fa-check"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/Validation/Validation.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Validation/Rules.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Validation/Messages.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Validation/Requirements.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Validation/Validator.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Validation/Invalidator.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/InputFileMaker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/evento/editar.js')}}"></script>
@endsection