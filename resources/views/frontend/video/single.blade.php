@extends('frontend.layout')
@section('metatag')
    <meta property="og:title" content="{{$post->title}}" />
    <meta property="og:url" content="https://www.jamiyathrisaalaa.com/" />
    <meta property="og:image" content="/storage/video/{{$post->image}}" />
@endsection
@section('content')

    <section class="pt-5 mt-5 animate__animated animate__fadeIn">

        <div class="container  pt-5">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <h2 class="thaana text-center pb-5">{{$post->title}}</h2>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$post->url}}"  autoplay="1" rel="0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <hr>
                    <p class="thaana rtl">ޕޯސްޓް ކުރީ: {{$post->author->name}} || {{$post->category->name}} || {{$date->dhivehidate($post->created_at)}}</p>
                    <hr>
                    <div class="utheemfont rtl" style="line-height: 40px; font-size: larger;">
                        {!! $post->body !!}
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>

    </section>


@endsection



