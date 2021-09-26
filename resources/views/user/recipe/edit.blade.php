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
                            <form role="form" action="{{ route('userpost-update',['id'=> $post->id ]) }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input value="{{$post->title}}" name="title" type="text" class="form-control thaana" id="recipe" placeholder="ރެސިޕީގެ ނަން">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea name="ingredients" type="text" class="form-control utheemfont" id="ingredient" placeholder="ބޭނުންވާތަކެތި .. މިސާލަކަށް ފިޔާ(ކޮޝާފައި) 2ސަމުސާ ލޮނު">{{$post->ingredients}}</textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea rows="10" name="body" type="text" class="form-control utheemfont" id="body" placeholder="ހަދަންވީގޮތް">{{$post->body}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label style="float: right;" class="thaana">ކެޓަގެރީ އިހުތިޔާރު ކުރައްވާ</label>
                                    <select class="form-control thaana" style="direction: rtl;" name="category_id">
                                        @foreach($categories  as $key=>$category)
                                            <option  class="thaana" value="{{ $key }}"{{ ( $post->Category->id == $category->id ) ? ' selected' : '' }}>{{$category->name }}</option>
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

                                        @if($post->image)
                                        <div class="card mt-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img width="100" src="/storage/image/{{$post->image}}" class="" ... />
                                                </div>
                                                <div class="col-md-6">
                                                    <p  class="thaana card-text p-2">ކުރިން އަޕްލޯޑް ކޮއްފައިވާ ފޮޓޯ</p>
                                                </div>
                                            </div>

                                        </div>
                                            @else

                                        @endif


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