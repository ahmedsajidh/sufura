@extends('backend.layout')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>POST PAGE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Posts</li>
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
            <a class="btn btn-primary" style="float: right; margin: 20px;" href="{{Route('createform')}}">Add Post</a>
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
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->Category->name}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><img width="100px;" src="/storage/image/{{$post->image}}"></td>
                        <td ><a href="/admin/dashboard/post/{{ $post->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>  |
                            <a href="/admin/dashboard/posts/{{$post->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
    {!! $posts->links(); !!}
    <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection