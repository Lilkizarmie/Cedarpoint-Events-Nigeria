@extends('layouts.main')

@section('main-container')
    <div class="project-list-piling a-pagepiling full-height">
        @foreach ($albums as $album)
        <div class="section pp-scrollable slide slide-dark">
            <div class="slide-container">
                <div class="slide-bg">
                    <div class="inside" style="background-image: url({{ asset('images/' . $album->photo) }});"></div>
                </div>
                <div class="container">
                    <div class="row slide-content">
                        <div class="col-sm-7">
                            <div class="project-parallax-detail">{{$album->event_date}}</div>
                            <h2 class="project-piling-title font-libre"><a
                                    href="{{route('singleview', $album->slug)}}">{{$album->title}}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    @endsection
