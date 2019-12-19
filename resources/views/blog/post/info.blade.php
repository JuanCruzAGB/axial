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
    <aside class="image m-auto" style='background: url({{asset("storage/$post->image")}}) no-repeat center top; background-attachment: fixed;'></aside>
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3">
        <div class="title">
            <h1 class="mb-1 p-3">{{$post->title}}</h1>
            <a class="d-inline-block mb-3" href="/categoria/{{$category->slug}}">
                <i class="fas fa-caret-right"></i>
                {{$category->name}}
            </a>
        </div>
        <div class="content mb-3">{!!$post->content!!}</div>
        <div class="d-flex justify-content-between mb-3">
            <div class="d-flex">
                <div class="picture px-0 mr-1">
                    <img class="picture-image" src='{{asset("storage/$user->picture")}}' alt="{{$user->name}} profile's picture">
                </div>
                <div class="title d-flex align-items-center p-0">
                    <span class="mr-1">Por:</span>
                    <a href="/usuario/{{$user->slug}}">{{$user->name}}</a>
                </div>
            </div>
            <div class="date d-flex align-items-center">
                <i class="far fa-clock mr-1"></i>
                <span>{{$post->date}}</span>
            </div>
        </div>
        @if(isset($post->tags))
            <div class="tags mb-3 d-flex">
                <i class="tag-icon fas fa-tags d-flex align-items-center"></i>
                <ul class="tags-list mb-0 ml-1 d-flex">
                    @foreach($post->tags as $tag)
                        <li>
                            <a class="tag-link mr-2" href="/etiqueta/{{$tag->slug}}">{{$tag->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/post/info.js')}}"></script>
@endsection