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

    <form role="form" action="{{ route('create-bayaan') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input name="title" type="text" class="form-control thaana" id="exampleInputEmail1" placeholder="Post Title">
            </div>
        </div>


        <div class="form-group">
            <label for="exampleInputFile">PDF File</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="file">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="image">
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