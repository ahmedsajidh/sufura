@extends('frontend.layout')

@section('content')

    <section class="pt-5 animate__animated animate__fadeIn">
        <div class="container" style="margin-top: 5px;">
            <h1 class=" thaana" style="font-size: 25px;">ރިޕޯޓް</h1>
            <div class="row" style="direction: rtl;">
                @foreach($posts as $post)
                    <div class="col-md-3 col-lg-3 col-6 pb-2 card-deck" >
                        <div class="card" style="background-color: whitesmoke; " style="direction: rtl !important;">
                            <img class="card-img-right" src="/storage/image/{{$post->image}}">
                            <div class="card-body" style="direction: rtl !important;" >
                                <p class="card-text update badge badge-pill thaana text-muted"> <small>  ލިޔުނީ:{{$post->name}}  | {{$post->created_at}}</small></p>
                                <h5 class="card-title thaana" style="direction: rtl !important; font-size: 19px; line-height: 2; ">{{$post->title}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $posts->links(); !!}
        </div>
    </section>


    @endsection