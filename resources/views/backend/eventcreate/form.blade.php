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

    <div class="col-md-3 offset-3">
        <!-- general form elements -->
        <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('create-event') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group  ">
                        <label for="inputEmail4">Event Title</label>
                        <input name="name" type="text" class="form-control thaana"  placeholder="Event Title">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        <!-- /.box -->



    </div>
    <!--/.col (left) -->


@endsection