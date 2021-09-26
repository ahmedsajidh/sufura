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

    <!-- /.box -->
    <div class="box container">
        <div class="box-header">
            <h3 class="box-title">All Posts</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a class="btn btn-primary" style="float: right; margin: 20px;" href="{{Route('slider-form')}}">Add Post</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Post Title</th>
                    <th>Post Category</th>
                    <th>Author</th>
                    <th>Post Image(s)</th>
                    <th>Auction</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slides as $slide)
                    <tr>
                        <td>{{$slide->title}}</td>
                        <td>{{$slide->secondtitle}}</td>
                        <td>{{$slide->author->name}}</td>
                        <td><img width="100px;" src="/storage/image/{{$slide->image}}"></td>
                        <td ><a href="/admin/dashboard/slider/{{ $slide->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>  |
                            <a href="/admin/dashboard/slider/{{$slide->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Post Title</th>
                    <th>Post Category</th>
                    <th>Author</th>
                    <th>Post Image(s)</th>
                    <th>Auction</th>
                </tr>
                </tfoot>
            </table>
        </div>
    {!! $slides->links(); !!}
    <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection