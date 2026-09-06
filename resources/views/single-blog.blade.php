@extends('layouts.single')
@section('main-container')
    <div class="">

        <div class="video-bnr section section-mini section-centered full-height full-image-dark text-white"
            style="background-image: url({{ asset('images/' . $post->image) }});">
            {{-- <div class="section-item">
                <a href="https://vimeo.com/191947042" data-fancybox="" class="btn-play btn-play-lg"><i
                        class="icon ion-ios-play"></i></a>
            </div> --}}
        </div>

        <div class="section-item text-left mb130">
            <div class="container">
                <div class="page-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-10" role="main">
                            <h1 class="h2-3d font-libre"><strong>{{$post->title}}</strong></h1>
                            <div class="news-info mb70">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
