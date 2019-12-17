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
    <section class="col-12 col-md-10 col-xl-8 mx-auto">
        <div class="title">
            <h1 class="mb-3">Listado de publicaciones</h1>
        </div>
        @if($count)
            @foreach($posts as $post)
                <div class="post row">
                    <div class="title col-12">
                        <h2 class="mb-1 p-3">{{$post->title}}</h2>
                        <div class="d-flex">
                            <div class="date mr-3">
                                <i class="far fa-clock"></i>
                                <span>{{$post->date}}</span>
                            </div>
                            @if(isset($post->tags))
                                <div class="tags mb-3 d-flex">
                                    <i class="tag-icon fas fa-tags d-flex align-items-center"></i>
                                    <ul class="tags-list mb-0 ml-1 d-flex">
                                        @foreach($post->tags as $tag)
                                            <li>
                                                <a class="tag-link mr-1" href="/etiqueta/{{$tag->slug}}">{{$tag->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="image col-12">
                        <img src='{{asset("storage/$post->image")}}' alt="{{$post->title}} image" class="post-image"/>
                    </div>
                    <div class="content col-12 mb-3">{!!$post->content!!}</div>
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