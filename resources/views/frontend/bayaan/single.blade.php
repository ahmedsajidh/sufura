@extends('frontend.layout')
@section('metatag')
    <meta property="og:title" content="{{$post->title}}" />
    <meta property="og:url" content="https://www.jamiyathrisaalaa.com/" />
@endsection
@section('content')

    <section class="pt-5 mt-5 animate__animated animate__fadeIn">

        <div class="container  pt-5">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <h2 style="line-height: 60px;" class="thaana text-center pb-5">{{$post->title}}</h2>
                    {{--<a href="#" title=""><img class="card-img" src="/storage/image/{{$post->image}}" alt="evnt-img1.jpg"></a>--}}
                    <hr>
                    <p class="thaana rtl"> {{$date->dhivehidate($post->created_at)}}</p>
                    <hr>
                    <div class="utheemfont" style="line-height: 40px; font-size: larger;">
                        <iframe src="/storage/file/{{$post->file}}" width="100%" height="800px">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>

    </section>

@endsection
