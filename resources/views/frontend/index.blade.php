@extends('frontend.layout')
@section('metatag')
    <meta property="og:title" content="Jamiyath Risaalaa" />
    <meta property="og:url" content="https://www.jamiyathrisaalaa.com/" />
    <meta property="og:image" content="https://one-media.sgp1.digitaloceanspaces.com/post/b_7jDZaRpXPbyJS21033PsVIiHl.jpg" />
    @endsection
@section('content')
    {{--fahuge post thahh--}}
    <section class="pt-5 pb-5 animate__animated animate__fadeIn" style="  margin-top: 70px;">
        <div class="container">
            <div class="container">
                <h4 class="thaana">ހޮވާލެވޭ</h4>
                <div class="row" style="direction: rtl;">
                    @foreach($posts as $post)
                    <div class=" col-md-4 mb-12 s-space">
                        <div class="card h-100" style="border: none; background-color: #f8fbff;">
                            <div class="card-body text-center p-2">
                                <img class="w-100 h-100" src="/storage/image/{{$post->image}}">
                            </div>
                            <div class="card-header">
                                <a href="{{ URL::to('/post/') }}/{{$post->id}}" title="">
                                <h4 class="thaana text-center card-title">{{$post->title}}</h4>
                                </a>
                                <p class="thaana" style="float: left; font-size: 16px;">{{$post->Category->name}}</p>
                            </div>
                            <div class="card-footer">
                                <p class="utheemfont text-center card-group text-muted">  {{$post->user->name}} | {{$date->dhivehidate($post->created_at)}} </p>
                                <a href="{{route('addtocart',['id' => $post->id])}}" style="font-size: 30px; float: left; color: #b56816; "  type="submit"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
    {{--hedhikaa saction--}}
    <section class="pt-5 pb-5 animate__animated animate__fadeIn" >
        <div class="container">
            <div class="container">
                <h4 class="thaana text-xl-right">ހެދިކާ</h4>
                <div class="row" style="direction: rtl;">
                    @foreach($hedhikas as $hedhika)
                    <div class="col-6 col-md-3 mb-12 s-space">
                        <div class="card h-100" style="border: none; background-color: #f8fbff;">
                            <div class="card-body text-center p-2">
                                <img class="w-100 h-100" src="{{asset('/storage/image/'.$hedhika->image)}}">
                            </div>
                            <div class="card-header">
                                <a href="{{ URL::to('/post/') }}/{{$hedhika->id}}" title="">

                                <h4 class="thaana text-center card-title">{{$hedhika->title}}</h4>
                                </a>
                            </div>
                            <div class="card-footer">
                                <p class="utheemfont text-center card-group text-muted">  {{$hedhika->name}} | {{$date->dhivehidate($hedhika->created_at)}} </p>

                                <a style="font-size: 25px; float: left; color: #b56816; "  type="submit"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    {{--riha saction--}}
    <section class="pt-5 pb-5 animate__animated animate__fadeIn" >
        <div class="container">
            <div class="container">
                <h4 class="thaana text-xl-right">ރިހަ</h4>
                <div class="row" style="direction: rtl;">
                    @foreach($rihas as $riha)
                        <div class="col-6 col-md-3 mb-12 s-space">
                            <div class="card h-100" style="border: none; background-color: #f8fbff;">
                                <div class="card-body text-center p-2">
                                    <img class="w-100 h-100" src="{{asset('/storage/image/'.$riha->image)}}">
                                </div>
                                <div class="card-header">
                                    <a href="{{ URL::to('/post/') }}/{{$riha->id}}" title="">

                                        <h4 class="thaana text-center card-title">{{$riha->title}}</h4>
                                    </a>
                                </div>
                                <div class="card-footer">

                                    <p class="utheemfont text-center card-group text-muted">  {{$riha->name}} | {{$date->dhivehidate($riha->created_at)}} </p>
                                    <a style="font-size: 25px; float: left; color: #b56816; "  type="submit"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    {{--baiy saction--}}
    <section class="pt-5 pb-5 animate__animated animate__fadeIn" >
        <div class="container">
            <div class="container">
                <h4 class="thaana text-xl-right">ބަތް</h4>
                <div class="row" style="direction: rtl;">
                    @foreach($baiys as $baiy)
                        <div class="col-6 col-md-3 mb-12 s-space">
                            <div class="card h-100" style="border: none; background-color: #f8fbff;">
                                <div class="card-body text-center p-2">
                                    <img class="w-100 h-100" src="{{asset('/storage/image/'.$baiy->image)}}">
                                </div>
                                <div class="card-header">
                                    <a href="{{ URL::to('/post/') }}/{{$baiy->id}}" title="">

                                        <h4 class="thaana text-center card-title">{{$baiy->title}}</h4>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <p class="utheemfont text-center card-group text-muted">  {{$baiy->name}} | {{$date->dhivehidate($baiy->created_at)}} </p>

                                    <a href="/session/set/{{$baiy->id}}" style="font-size: 25px; float: left; color: #b56816; "  type="submit"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{--<section class="pt-5 pb-5 animate__animated animate__fadeIn" style=" background-color: #eceff3; margin-top: 70px;">--}}
        {{--<div class="container">--}}
            {{--<div class="row" style="direction: rtl;">--}}
                {{--@foreach($posts as $post)--}}

                {{--<div class="col-md-4 col-lg-4 pb-2 card-deck" >--}}

                    {{--<div class="card" style="background-color: whitesmoke; " style="direction: rtl !important;">--}}

                        {{--<img class="card-img-right" src="/storage/image/{{$post->image}}">--}}

                        {{--<div class="card-body" style="direction: rtl !important;" >--}}
                            {{--<p class="card-text update badge badge-pill thaana text-muted"> <small>  ލިޔުނީ: {{$post->author->name}}  | {{$date->dhivehidate($post->created_at)}}</small></p>--}}
                            {{--<p class="badge badge-primary thaana" style="float: left; font-size: 16px;">{{$post->category->name}}</p>--}}
                            {{--<hr>--}}
                            {{--<a style="text-decoration: none;" href="{{ URL::to('/post/') }}/{{$post->id}}">  <h5 class="card-title thaana" style="direction: rtl !important; font-size: 19px; line-height: 2;"> {{$post->title}}</h5> </a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    @endsection