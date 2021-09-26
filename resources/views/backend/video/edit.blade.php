@extends('backend.layout')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Home Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Layout</a></li>
                    <li class="breadcrumb-item active">Fixed Layout</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

@endsection

@section('content')

    <form action="{{ route('video-update',['id'=> $video->id ]) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input name="title" type="text" class="form-control thaana" id="exampleInputEmail1" value="{{$video->title}}">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">You tube Video ID</label>
                <input name="url" type="text" class="form-control thaana" id="exampleInputEmail1" value="{{$video->url}}">
            </div>
        </div>

        <div class="form-group">
            <label>Select</label>
            <select class="form-control" name="category_id">
                <option selected  value="{{$video->Category->id}}"> {{$video->Category->name}}</option>
            </select>
        </div>

        <div class="form-group">
            <img style="width: 50px;" src="/storage/image/{{$video->image}}">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="image" value="{{$video->image}}" >
                </div>
            </div>
        </div>
        <input name="author_id" type="hidden" class="form-control" id="inputEmail4" value="{{auth()->user()->id}}">
        <input name="status" type="hidden" class="form-control" id="inputEmail4" value="0">
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


@endsection