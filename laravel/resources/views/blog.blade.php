@extends('layouts.single')

@section('main-container')
    <div class="section section-content">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col-lg-9">
                    <h3 class="section-item-title section-item-title-md text-grey-light">Blog Posts</h3>
                    <h1 class="h2-flash font-libre"><strong>We write and share tips sometimes</strong>
                    </h1>
                    {{-- <ul class="nav nav-inline parallax-link nav-inline-wide a-grid-filter text-uppercase">
                        <li class="nav-item active"><a data-filter="*" data-text="news">news</a></li>
                        <li class="nav-item"><a data-filter=".category-inspiration" data-text="inspiration">inspiration</a>
                        </li>
                        <li class="nav-item"><a data-filter=".category-product" data-text="product">product</a></li>
                        <li class="nav-item"><a data-filter=".category-tips" data-text="tips & tricks">tips & tricks</a>
                        </li>
                    </ul> --}}
                </div>
            </div>
            <div class="article-list-grid row a-grid-line">
                @foreach ($posts as $post)
                <div class="col-md-4 grid-item category-inspiration">
                    <div class="article-item mb70">
                        <div class="article-item-photo zooming wow fadeInDown" data-wow-delay=".3s" data-wow-offset="150"><a
                                href="{{route('post', $post->slug)}}"><img src="{{ asset('images/' . $post->image) }}" alt=""
                                    class="img-fluid" /></a></div>
                        {{-- <div class="article-item-category"><a href="#">inspiration</a></div> --}}
                        <div class="article-item-title"><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></div>
                        <div class="article-item-date text-grey">{{ date('F j, Y', strtotime($post->created_at)) }}
                            {{-- December 25, 2018 --}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="pager row mt50 text-uppercase">
                {{-- <div class="col-6"><a href="#"><i class="icon ion-ios-arrow-left"></i> older posts</a></div>
                <div class="col-6 text-right"><a href="#">newer posts <i class="icon ion-ios-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
