@extends('backend.layout')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Site Settings</h1>
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

    <form action="{{ route('sitesetting-update',['id'=> $setting->id ]) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Site Title</label>
                <input name="sitetitle" type="text" class="form-control thaana" id="exampleInputEmail1" value="{{$setting->sitetitle}}">
            </div>
        </div>

        <div class="form-group">
            <img style="width: 50px;" src="/storage/sitesetting/{{$setting->logo}}">
            <label for="exampleInputFile">Logo Topbar</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="logo" value="{{$setting->logo}}" >
                </div>
            </div>
        </div>

        <div class="form-group">
            <img style="width: 50px;" src="/storage/sitesetting/{{$setting->fevicon}}">
            <label for="exampleInputFile">Fevicon for browser tab</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="fevicon" value="{{$setting->fevicon}}" >
                </div>
            </div>
        </div>

        <div class="form-group">
            <img style="width: 50px;" src="/storage/sitesetting/{{$setting->footerlogo}}">
            <label for="exampleInputFile">White Logo For Footer</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="footerlogo" value="{{$setting->footerlogo}}" >
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Site Description</label>
                <input name="sitedescription" type="text" class="form-control thaana" id="exampleInputEmail1" value="{{$setting->sitedescription}}">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input name="number" type="number" class="form-control thaana" id="exampleInputEmail1" value="{{$setting->number}}">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control thaana" id="exampleInputEmail1" value="{{$setting->email}}">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Footer Coppy rights</label>
                <input name="footercopyright" type="text" class="form-control thaana" id="exampleInputEmail1" value="{{$setting->footercopyright}}">
            </div>
        </div>

        <div class="form-group">
            <img style="width: 50px;" src="/storage/sitesetting/{{$setting->help}}">
            <label for="exampleInputFile">Ehee Banner</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file"  name="help" value="{{$setting->help}}" >
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Facebook URL</label>
                <input name="fburl" type="text" class="form-control thaana" id="exampleInputEmail1" value="{{$setting->fburl}}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>


@endsection