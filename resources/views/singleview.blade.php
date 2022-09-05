@extends('layouts.single')

@section('main-container')
    <div class="project-card-mobile">
        <div class="section">
            <div class="section-item">
                <div class="container">
                    <h1 class="font-libre fs48 lh-sm"><strong>{{ $album->title }}</strong></h1>
                    <div class="project-info">
                        <div class="row text-center">
                            {{-- <div class="col-sm-6 col-md-3">
                                <div class="project-info-item">
                                    <div class="project-info-title">Location</div>
                                    <div class="project-info-descr">California Art Gallery Museum</div>
                                </div>
                            </div> --}}
                            <div class="col-sm-12 col-md-12">
                                <div class="project-info-item">
                                    <div class="project-info-title">Date</div>
                                    <div class="project-info-descr">{{$album->event_date}}</div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6 col-md-3">
                                <div class="project-info-item">
                                    <div class="project-info-title">Couples</div>
                                    <div class="project-info-descr">Feburary 25th, 2019</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="project-info-item">
                                    <div class="project-info-title">Theme</div>
                                    <div class="project-info-descr">LoganCee - Designer</div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
            <div class="section-item">
                <div class="photo-list">
                    <div class="" style="display: flex; flex-wrap:wrap; justify-content: center">
                        @foreach ($album->photos as $photo)
                            <div class="photo-item wow fadeInLeft" data-wow-delay=".3s" data-wow-offset="100">
                                <div class="container"><img src="{{ asset('images/' . $photo->photo) }}" alt="" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- <div class="section-item">
                <div class="container">
                    <ul class="social social-rounded mt100">
                        <li><a href="#" class="text-grey-light"><i class="socicon-twitter"></i></a></li>
                        <li><a href="#" class="text-grey-light"><i class="socicon-facebook"></i></a></li>
                        <li><a href="#" class="text-grey-light"><i class="socicon-googleplus"></i></a></li>
                        <li><a href="#" class="text-grey-light"><i class="socicon-tumblr"></i></a></li>
                        <li><a href="#" class="text-grey-light"><i class="socicon-rss"></i></a></li>
                    </ul>
                    <div class="mt100">
                        <button class="like-btn"><i class="icon ion-heart"></i></button>
                        <div class="text-grey mt-3">268 Liked</div>
                    </div>
                </div>
            </div> --}}
            <div class="section-item">
                <div class="project-next-simple text-black font-libre"><a href="{{route('gallery')}}">Back</a></div>
            </div>
        </div>
    </div>
@endsection
