<?php
    /** @var Category|Tag $model */
    /** @var Post $post */
    /** @var Tag[] $tags */
    /** @var User $user */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/post/list.css')}}" rel="stylesheet">
@endsection

@section('title')
    Blog - {{$model->name}} - Publicaciones
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <section class="col-12 col-md-10 col-xl-8 mx-auto pt-3">
        <div class="title">
            <h1 class="mb-3">Listado de publicaciones</h1>
        </div>
        @if($count)
            @foreach($posts as $post)
                <div class="post row">
                    <div class="title col-12">
                        <h2 class="mb-1 p-3">{{$post->title}}</h2>
                        <div class="d-flex mb-3">
                            <a class="d-inline-block mr-3" href="/categoria/{{$post->category->slug}}">
                                <i class="fas fa-caret-right"></i>
                                {{$post->category->name}}
                            </a>
                            @if(isset($post->tags))
                                <div class="tags d-flex">
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
                        </div>
                    </div>
                    <div class="image col-12 mb-3">
                        <img src='{{asset("storage/$post->image")}}' alt="{{$post->title}} image" class="post-image"/>
                    </div>
                    <div class="preview col-12 mb-3 p-0 pl-3 pr-4">{!!$post->content!!}</div>
                    <div class="d-flex justify-content-between col-12 mb-3">
                        <div class="d-flex">
                            <div class="picture px-0 mr-1">
                                <img class="picture-image" src='{{asset("storage/" . $post->user->picture)}}' alt="{{$post->user->name}} profile's picture">
                            </div>
                            <div class="title d-flex align-items-center p-0">
                                <span class="mr-1">Por:</span>
                                <a href="/usuario/{{$post->user->slug}}">{{$post->user->name}}</a>
                            </div>
                        </div>
                        <div class="date d-flex align-items-center">
                            <i class="far fa-clock mr-1"></i>
                            <span>{{$post->date}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/post/list.js')}}"></script>
@endsection