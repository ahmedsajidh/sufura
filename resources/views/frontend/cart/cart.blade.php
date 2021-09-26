@extends('frontend.layout')
@section('metatag')

@endsection
@section('content')
<div class="container" style="padding-top: 100px;">
    @if(Session::has('c'))
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach(session('c') as $id => $post)
                        <a href="/post/{{$id}}" style="text-decoration: none; color: #575b59;">
                        <li class="list-group-item">
                           <strong class="thaana list-group-flush mr-2">{{$post['title']}}</strong>
                            <img width="100" src="/storage/image/{{$post['image']}}">
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                        </li>
                        </a>
                        @endforeach
                </ul>
            </div>
        </div>

        @else


        @endif

</div>


@endsection