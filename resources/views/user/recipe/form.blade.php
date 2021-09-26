@extends('user.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark thaana">ރެސިޕީ ހިއްސާކުރައްވާ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right pt-4">
                        <li class="breadcrumb-item  thaana">ޑޭޝްބޯޑް</li>
                        <li class="breadcrumb-item active thaana">ރެސިޕީ ފޮނުވުމަށް</li>
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
                            <form role="form" action="{{route('create-userpost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input name="title" type="text" class="form-control thaana" id="recipe" placeholder="ރެސިޕީގެ ނަން">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea name="ingredients" type="text" class="form-control utheemfont" id="ingredient" placeholder="ބޭނުންވާތަކެތި .. މިސާލަކަށް ފިޔާ(ކޮޝާފައި) 2ސަމުސާ ލޮނު"></textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea rows="10" name="body" type="text" class="form-control utheemfont" id="body" placeholder="ހަދަންވީގޮތް"></textarea>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label style="float: right;" class="thaana">ކެޓަގެރީ އިހުތިޔާރު ކުރައްވާ</label>
                                    <select class="form-control thaana" style="direction: rtl;" name="category_id">
                                        @foreach($categories as $category)
                                            <option  class="thaana" value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="thaana">ފޮޓޯ އަޕްލޯޑް ކުރައްވާ:</label>
                                    <div class="form-control">
                                        <div class="custom-file">
                                            <input class="form-group" type="file"  name="image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

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