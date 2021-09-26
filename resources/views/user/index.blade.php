@extends('user.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark thaana">ޔޫޒާ ޑޭސްބޯޑް</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active thaana">ޑޭޝްބޯޑް</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text utheemfont"> ސުފުރާގެ ފަރާތުން މި އެޕްލިކޭޝްންގެ މަގުސަދަކީ ދިވެހި ބަހުން ކާބޯތތަކެތި ތައްޔާރު ކުރާ ގޮތް ފަސޭހަ ކަމާއެކު ކިޔުންތެރިންންށް ފޯރުކޮށްދިނުމުވެ.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a  class="btn btn-sm btn-outline-primary" style="float: left;" href="{{route('recipeForm')}}"><i class="fa fa-plus"></i></a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="thaana">ރެސިޕޕީގެ ނަން</th>
                                    <th scope="col" class="thaana">ފޮޓޯ</th>
                                    <th scope="col" class="thaana">ސްޓޭތަސް</th>
                                    <th scope="col" class="thaana">އެޑިޓް / ޑިލީޓް</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recepies as $recepy)
                                <tr>
                                    <td class="utheemfont">{{$recepy->title}}</td>
                                    <td><img width="50" src="/storage/image/{{$recepy->image}}"></td>
                                    <td>
                                        @if(!$recepy->status == 1)
                                        <span><i class="fa fa-exclamation-triangle text-danger"></i></span>
                                        @else
                                        <span><i class="fa fa-check-circle text-success"></i></span>
                                            @endif
                                    </td>
                                    <td>
                                        <a href="/dashboard/post/{{$recepy->id}}/edit" class="btn btn-sm btn-default thaana"><i class="fa fa-edit text-primary"></i></a>
                                        <a href="/dashboard/posts/{{$recepy->id}}" class="btn btn-sm btn-default thaana"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">
                                    <div class="pagination ">{{$recepies->links()}}</div>
                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-3">

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection