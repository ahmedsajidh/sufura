@extends('backend.layout')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>EVENTS PAGE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">EVENTS</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

@endsection

@section('content')

    <!-- /.box -->
    <div class="box container">
        <div class="box-header">
            <h3 class="box-title">CREATE EVENTS</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="{{route('store-event')}}" class="btn btn-success mb-5" style="float: right;"> create</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Event</th>
                    <th>Action</th>
                </tr>

                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{$event->name}}</td>
                        <td>
                            <a href="/admin/event/{{ $event->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>  |
                            <a href="/admin/dashboard/event/{{$event->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Event</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>

        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection