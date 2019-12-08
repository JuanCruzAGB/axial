<?php
    /** @var array $validations */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/tag/create.css')}}" rel="stylesheet">
    <link href="{{asset('ValidationJS/css/styles.css')}}" rel="stylesheet">
@endsection

@section('title')
    Nueva etiqueta
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div id="new-tag" class="new-tag col-12 d-flex justify-content-between">
        <section>
            <div class="title">
                <h2 class="mb-3 p-3">Nueva etiqueta</h2>
            </div>
            <div class="content">
                <form action="/etiqueta/crear"
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    data-validation="{{$validation}}">
                    @csrf
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
                                    value="{{old('name')}}"
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
    <script type="text/javascript" src="{{asset('js/blog/tag/create.js')}}"></script>
@endsection