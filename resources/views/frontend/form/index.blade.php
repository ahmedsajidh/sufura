@extends('frontend.layout')

@section('content')

    <div class="container-fluid " style="background-color: #e9e9e9">
        <div class="text-center p-5">
            <h1> </h1>
        </div>
        <div class="row ">
            <div class="col-md-2">

            </div>

            <div class="col-md-8 card p-5 m-3 shadow ">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <form  role="form" action="{{ route('join') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="card-text font-weight-bold text-center pb-5 utheemfont rtl" style="line-height: 40px;"><legend>އަޅުގަނޑުމެން ހިންގާ ޕްރޮގުރާމްތަކުގައި ބައިވެރިވުމަށްޓަކައި ތިރީގައިވާ ފޯރމް ފުރުއްވަވާ!</legend></div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="stdname" class="thaana rtl">ފުރިހަމަ ނަން:</label>
                                <input type="text" name="fullname" class="form-control rtl utheemfont" id="stdname">
                            </div>
                        </div>

                        <div class="form-row rtl">
                            <div class="form-group col-md-4">
                                <div class="form-group pb-3">
                                    <label for="idno" class="thaana">އައިޑީ ކާޑު ނަންްބާރ: </label>
                                    <input type="text" name="idcard" placeholder="A00000" class="form-control " id="dofb">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group pb-3">
                                    <label for="dofb" class="thaana">އުފަންދުވަސް:</label>
                                    <input type="date" name="date" class="form-control" id="dofb">
                                </div>
                            </div>
                        </div>
                        <div class="form-row rtl">
                            <div class="form-group col-md-6 ">
                                <label for="permanent" class="thaana">ދާއިމީ އެޑްރެސް: </label>
                                <input type="text" name="address" class="form-control utheemfont" placeholder="House name/island name/" id="permanent">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phonenumber" class="thaana">ފޯން ނަންބާރ:</label>
                                <input type="number" name="phone" class="form-control" id="stdname">
                            </div>
                        </div>
                        <div class="form-group col-md-12 rtl">
                            <label for="inputState" class="thaana">ބައިވެރިވާންބޭނުންވާ ޕްރޮގްރާމް:</label>
                            <select class="form-control thaana" name="event_id">
                                @foreach($events as $event)
                                    <option class="thaana" value="{{ $event->id }}">{{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </fieldset>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-2">

            </div>
        </div>



    </div>

@endsection