<?php
    /** @var Post $post */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/blog/post/info.css')}}" rel="stylesheet">
@endsection

@section('title')
    {{$post->title}}
@endsection

@section('nav')
    @component('components.nav.global')
    @endcomponent
@endsection

@section('main')
    <div class="col-12">
        
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/blog/post/info.js')}}"></script>
@endsection