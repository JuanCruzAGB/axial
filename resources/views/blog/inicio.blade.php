@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/inicio.css')}}" rel="stylesheet">
@endsection

@section('titulo')
    Blog
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="panel tabs col-12 d-flex justify-content-between">
        <div class="tab-menu p-2">
            <ul class="d-flex justify-content-around m-0 p-0">
                <li class="mb-2"><a class="tab-button opened" href="#personalizar">
                    <i class="tab-icon fas fa-edit"></i>
                    <span class="tab-text p-2">Personalizar Web</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#galerias">
                    <i class="tab-icon fas fa-images"></i>
                    <span class="tab-text p-2">Galerias</span>
                </a></li>
                <li><a class="tab-button" href="#eventos">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Eventos</span>
                </a></li>
            </ul>
        </div>
        <div class="tab-body pl-md-3">
            <div id="personalizar" class="personalizar tab-content opened mt-3 mt-md-0">
                <section>
                    <div class="title">
                        <h2 class="mb-0 p-3">Banner principal</h2>
                    </div>
                </section>
                <section>
                    <div class="title">
                        <h2 class="mb-0 p-3">Información inicial</h2>
                    </div>
                </section>
            </div>
            <div id="galerias" class="galerias tab-content mt-3 mt-md-0">
                <section class="habitaciones mb-5">
                    <div class="title">
                        <h2 class="mb-5 p-3">Habitaciones</h2>
                    </div>
                </section>
                <section class="instalaciones">
                    <div class="title">
                        <h2 class="mb-5 p-3">Instalaciones</h2>
                    </div>
                </section>
            </div>
            <div id="eventos" class="eventos tab-content mt-3 mt-md-0">
                <section>
                    <div class="title">
                        <h2 class="mb-3 p-3">Eventos creados</h2>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/inicio.js')}}"></script>
@endsection