@extends('frontend.layout')

@section('content')

    <section class="pt-5 mt-5 animate__animated animate__fadeIn">
        <div class="container" style="margin-top: 5px;">
            <h1 class=" thaana" style="font-size: 25px;">ބަޔާން</h1>
            <div class="row" style="direction: rtl;">
                @foreach($habarus as $habaru)
                    <div class="col-md-3 col-lg-3 col-6 pb-2 card-deck" >
                        <div class="card" style="background-color: whitesmoke; " style="direction: rtl !important;">
                            <img class="card-img-right" src="/storage/image/{{$habaru->image}}">
                            <div class="card-body" style="direction: rtl !important;" >
                                <p class="card-text update badge badge-pill thaana text-muted"> <small>  ލިޔުނީ:{{$habaru->name}}  | {{$habaru->created_at}}</small></p>
                                <a href="{{ URL::to('/post/') }}/{{$habaru->id}}" title=""> <h5 class="card-title thaana" style="direction: rtl !important; font-size: 19px; line-height: 2; ">{{$habaru->title}}</h5></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--{{$habarus->links()}}--}}
        </div>
    </section>


@endsection