@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/home.css')}}" rel="stylesheet">
@endsection

@section('title')
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
                <li class="mb-2"><a class="tab-button opened" href="#posts">
                    <i class="tab-icon fas fa-edit"></i>
                    <span class="tab-text p-2">Publicaciones</span>
                </a></li>
                <li class="mb-2"><a class="tab-button" href="#new-post">
                    <i class="tab-icon fas fa-images"></i>
                    <span class="tab-text p-2">Nueva publicación</span>
                </a></li>
                <li><a class="tab-button" href="#categories">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Categorias</span>
                </a></li>
                <li><a class="tab-button" href="#new-category">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Nueva categoría</span>
                </a></li>
                <li><a class="tab-button" href="#tags">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Etiquetas</span>
                </a></li>
                <li><a class="tab-button" href="#new-tag">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Nueva etiqueta</span>
                </a></li>
                <li><a class="tab-button" href="#profile">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Mí Perfil</span>
                </a></li>
                <li><a class="tab-button" href="#config">
                    <i class="tab-icon far fa-calendar"></i>
                    <span class="tab-text p-2">Configuración</span>
                </a></li>
            </ul>
        </div>
        <div class="tab-body pl-md-3">
            <div id="posts" class="posts tab-content opened mt-3 mt-md-0">
                @component('blog.components.posts')
                @endcomponent
            </div>
            <div id="new-post" class="new-post tab-content mt-3 mt-md-0">
                @component('blog.components.new-post')
                @endcomponent
            </div>
            <div id="categories" class="categories tab-content mt-3 mt-md-0">
                @component('blog.components.categories')
                @endcomponent
            </div>
            <div id="new-category" class="new-category tab-content mt-3 mt-md-0">
                @component('blog.components.new-category')
                @endcomponent
            </div>
            <div id="tags" class="tags tab-content mt-3 mt-md-0">
                @component('blog.components.tags')
                @endcomponent
            </div>
            <div id="new-tag" class="new-tag tab-content mt-3 mt-md-0">
                @component('blog.components.new-tag')
                @endcomponent
            </div>
            <div id="profile" class="profile tab-content mt-3 mt-md-0">
                @component('blog.components.profile')
                @endcomponent
            </div>
            <div id="config" class="config tab-content mt-3 mt-md-0">
                @component('blog.components.config')
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/home.js')}}"></script>
@endsection