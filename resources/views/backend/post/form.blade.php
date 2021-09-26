@extends('backend.layout')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="thaana">ރެސިޕީ އެއް އަޕލޯޑް ކުރައްވާ</h1>
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
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <form  role="form" method="post" enctype="multipart/form-data" id="dynamic_form">
                <span id="result"></span>
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="thaana form-text" style="float: right;">ސުރުހީ:</label>
                        <input name="title" type="text" class="form-control thaana" id="exampleInputEmail1" placeholder="Post Title">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="col-md-12 form-group" >
                    <label class="form-text  thaana" style="direction: rtl; float: right;">ބޭނުންވާ ތަކެތި:</label>
                    <textarea  name="ing" rows="5"   class="thaana form-control" ></textarea>
                </div>
                <div class="col-md-12 form-group">
                    <label class="form-text thaana " style="direction: rtl; float: right;">ހައްދަވާނެ ގޮތް:</label>
                    <textarea  name="body" rows="10"  class="thaana form-control" ></textarea>
                </div>
                <table class="table table-bordered table-striped thaana-keyboard thaana" id="user_table">
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" align="right">&nbsp;</td>
                    </tr>
                    </tfoot>
                </table>
                <div class="form-group" >
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="float: right;" class="thaana">ކެޓަގެރީ އިހުތިޔާރު ކުރައްވާ</label>
                                    <select class="form-control thaana-keyboard" style="direction: rtl;" name="category_id">
                                        @foreach($categories as $category)
                                            <option  class="thaana" value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label>Multiple</label>
                                        <select name="tags[]" class="select2 thaana-keyboard" multiple="multiple" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            @foreach($tags as $tag)
                                            <option class="thaana-keyboard" value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile" class="thaana" style="direction: rtl; float: right;">ފޮޓޯ އަޕްލޯޑްކުރައްވާ</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input class="form-control" style="direction: rtl;" type="file"  name="image"  >
                        </div>
                    </div>
                </div>
                <input name="user_id" type="hidden" class="form-control" id="inputEmail4" value="{{auth()->user()->id}}">
                <input name="status" type="hidden" class="form-control" id="inputEmail4" value="0">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary  thaana">ސަބްމިޓް</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>


@endsection
@section('js')

    <script>
        $(document).ready(function(){

            var count = 1;

            dynamic_field(count);

            function dynamic_field(number)
            {


                html = '<tr class="rtl">';
                html += '<td><input data-length placeholder="ބޭނުންވާ ތަކެތި" type="text" name="name[]" class="form-control  thaana-keyboard" /></td>';
                html += '<td><input data-length placeholder="އަދަދު" type="text" name="qty[]" class="form-control  thaana-keyboard" /></td>';
                if(number > 1)
                {
                    html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove"><i class="fa fa-minus"></i></button></td></tr>';
                    $('tbody').append(html);
                }
                else
                {
                    html += '<td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td></tr>';
                    $('tbody').html(html);
                }
            }
            $(document).on('click', '#add', function(){
                count++;
                dynamic_field(count);
            });

            $(document).on('click', '.remove', function(){
                count--;
                $(this).closest("tr").remove();
            });

            $('#dynamic_form').on('submit', function(event){
                event.preventDefault();
                var formData = new FormData($('#dynamic_form')[0]);
                $.ajax({
                    url:'{{ route("create-post") }}',
                    method:'post',
                    data:formData,
                    dataType:'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){
                        $('#save').attr('disabled','disabled');

                    },
                    success:function(data)

                    {
                        if(data.error)
                        {
                            var error_html = '';
                            for(var count = 0; count < data.error.length; count++)
                            {
                                error_html += '<p>'+data.error[count]+'</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                        }
                        else
                        {
                            dynamic_field(1);
                            $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                        }
                        $('#save').attr('disabled', false);
                    }
                })
            });

        });

    </script>
    <script src="/backend/thaana/thaana-keyboard.js"></script>
@endsection