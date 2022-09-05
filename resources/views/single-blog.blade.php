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
                                        <div class="news-info-item">
                                            <div class="news-info-title">Author</div>
                                            <div class="news-info-descr">CedarPoint</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="news-info-item">
                                            <div class="news-info-title">pubslished on</div>
                                            <div class="news-info-descr">{{ date('F j, Y', strtotime($post->created_at)) }}</div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-6 col-md-3">
                                        <div class="news-info-item">
                                            <div class="news-info-title">category</div>
                                            <div class="news-info-descr">Products</div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="article-content article-news mb65">
                                {!! $post->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-10 mb130" role="main">

                        <div class="row mb30">
                            {{-- <div class="col-sm-6 mb30">
                                <ul class="social social-rounded social-follow">
                                    <li class="social-title">Share on</li>
                                    <li><a href="#" class="follow-facebook"><i
                                                class="icon ion-social-facebook"></i></a></li>
                                    <li><a href="#" class="follow-twitter"><i class="icon ion-social-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="follow-googleplus"><i
                                                class="icon ion-social-googleplus"></i></a></li>
                                    <li><a href="#" class="follow-tumblr"><i class="icon ion-social-tumblr"></i></a>
                                    </li>
                                    <li><a href="#" class="follow-rss"><i class="icon ion-social-rss"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <hr class="mt-0 mb70">
                        <h4 class="mb55">Comments</h4>
                        @comments(['model' => $post])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
