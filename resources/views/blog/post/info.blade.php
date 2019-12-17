<?php
    /** @var Category $category */
    /** @var Post $post */
    /** @var Tag[] $tags */
    /** @var User $user */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/post/info.css')}}" rel="stylesheet">
@endsection

@section('title')
    Blog - {{$post->title}}
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto">
        <div class="title">
            <h1 class="mb-1 p-3">{{$post->title}}</h1>
            <a class="d-inline-block mb-3" href="/categoria/{{$category->slug}}">
                <i class="fas fa-caret-right"></i>
                {{$category->name}}
            </a>
        </div>
        <div class="image mb-3">
            <img src='{{asset("storage/$post->image")}}' alt="{{$post->title}} image" class="post-image"/>
        </div>
        <div class="row">
            <div class="col-12 mb-1">
                <i class="far fa-clock"></i>
                <span>{{$post->date}}</span>
            </div>
            <div class="col-12 mb-3 d-flex">
                <i class="tag-icon fas fa-tags d-flex align-items-center"></i>
                <ul class="tags mb-0 ml-1 d-flex">
                    @foreach($tags as $tag)
                        <li>
                            <a class="tag-link mr-1" href="/etiqueta/{{$tag->slug}}">{{$tag->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="content mb-3">{!!$post->content!!}</div>
        <div class="d-flex">
            <div class="picture px-0 mr-1">
                <img class="picture-image" src='{{asset("storage/$user->picture")}}' alt="{{$user->name}} profile's picture">
            </div>
            <div class="title d-flex align-items-center p-0">
                <span class="mr-1">Por:</span>
                <a href="/usuario/{{$user->slug}}">{{$user->name}}</a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/post/info.js')}}"></script>
@endsection