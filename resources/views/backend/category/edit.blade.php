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

    <!-- left column -->
    <div class="col-md-6 offset-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('category-update',['id'=> $category->id ]) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-row">
                    <div class="form-group  ">
                        <label for="inputEmail4">Category Title</label>
                        <input name="name" type="text" class="form-control"  placeholder="Category Title" value="{{$category->name}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        <!-- /.box -->

    </div>
    <!--/.col (left) -->


@endsection