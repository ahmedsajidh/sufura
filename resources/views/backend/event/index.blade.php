@extends('backend.layout')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>REGITER PAGE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

@endsection

@section('content')

    <!-- /.box -->
    <div class="box container">
        <div class="box-header">
            <h3 class="box-title">Users Register For Event</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Program</th>
                    <th>Phone</th>
                    <th>Adress</th>
                    <th>ID Card</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registers as $register)
                    <tr>
                        <td>{{$register->fullname}}</td>
                        <td>{{$register->Event->name}}</td>
                        <td>{{$register->phone}}</td>
                        <td>{{$register->address}}</td>
                        <td>{{$register->idcard}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Program</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>ID Card</th>
                </tr>
                </tfoot>
            </table>
        </div>

    <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection