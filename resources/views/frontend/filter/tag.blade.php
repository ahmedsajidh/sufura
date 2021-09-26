
@extends('frontend.layout')
@section('metatag')
    <meta property="og:url" content="https://www.jamiyathrisaalaa.com/" />
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
@endsection
@section('content')
    <section class="pt-5 pb-5 animate__animated animate__fadeIn" style="margin-top: 50px;" >
        <div class="container">
            <div class="container">
                <h4 class="thaana text-xl-right">{{$posts[0]->tags[0]->name}}</h4>
                <div class="row" style="direction: rtl;">
                    @foreach($posts as $post)
                        <div class="col-6 col-md-3 mb-12 s-space">
                            <div class="card h-100" style="border: none; background-color: #f8fbff;">
                                <div class="card-body text-center p-2">
                                    <img class="w-100 h-100" src="{{asset('/storage/image/'.$post->image)}}">
                                </div>
                                <div class="card-header">
                                    <a href="{{ URL::to('/post/') }}/{{$post->id}}" title="">

                                        <h4 class="thaana text-center card-title">{{$post->title}}</h4>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <p class="utheemfont text-center card-group text-muted">  {{$post->name}} | {{$date->dhivehidate($post->created_at)}} </p>
                                    @foreach($post->tags as $tag)
                                    <a href="{{ URL::to('/posts/tag') }}/{{$tag->slug}}">
                                        <p  class="badge badge-primary">{{$tag->name}}</p>
                                    </a>
                                    @endforeach
                                    <a href="/session/set/{{$post->id}}" style="font-size: 25px; float: left; color: #b56816; "  type="submit"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection


