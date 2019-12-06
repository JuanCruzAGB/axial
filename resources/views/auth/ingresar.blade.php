<?php
    /** @var object[] $validation */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/Validation.css')}}" rel="stylesheet">
    <link href="{{asset('css/auth/ingresar.css')}}" rel="stylesheet">
@endsection

@section('title')
    Iniciar Sesión
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="ingresar col-12 col-md-10 col-lg-8">
        <div class="title">
            <h2>Iniciar Sesión</h2>
        </div>
        <form action="/ingresar"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="form-group form-group-sm col-12 mb-2">
                    <label for="email" class="input-name m-0 p-0">
                        <span class="input-text">Correo</span>
                    </label>
                    <input id="email"
                        name="email"
                        type="text"
                        class="form-control m-0 p-2"
                        value="{{old('email')}}"
                        placeholder="ejemplo@email.com">
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

                <div class="form-group form-group-sm col-12 mb-2">
                    <label for="password" class="input-name m-0 p-0">
                        <span class="input-text">Contraseña</span>
                    </label>
                    <input id="password" 
                        name="password"
                        type="password" 
                        class="form-control m-0 p-2"
                        placeholder="Contraseña">
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

                <div class="col-12 d-flex justify-content-end">
                    <div class="form-check d-flex align-items-center mr-2 p-0">
                        <input class="form-check-input m-0" type="checkbox" id="autoSizingCheck2" name="remember">
                        <label class="form-check-label ml-4" for="autoSizingCheck2">Recordarme</label>
                    </div>
                    <button class="form-submit btn btn-primary"
                        type="submit"
                        name="action">Ingresar
                        <i class="submit-icon fas fa-caret-right"></i>
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
    <script type="text/javascript" src="{{asset('js/auth/ingresar.js')}}"></script>
@endsection