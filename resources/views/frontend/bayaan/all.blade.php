@extends('frontend.layout')

@section('content')

    <section>
        <div class="gap">
            <div class="container">
                <div class="evnt-pry-wrap">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-title">
                                <div class="sec-title-inner">
                                    <h3 class="thaana1">ނޫސްބަޔާން</h3>
                                </div>
                                <p class="thaana">ޖަމިއްޔަތުއް ރިސާލާގެ ފަހުގެ ވީދިއޯ</p>
                            </div>
                            <div class="evnt-wrap remove-ext5">
                                <div class="row mrg20">
                                    @foreach($bayaans as $bayaan)
                                        <div class="col-md-3 col-sm-6 col-lg-3">
                                            <div class="evnt-box">
                                                <div class="evnt-thmb">
                                                    <a href="{{ URL::to('/bayaan/') }}/{{$bayaan->id}}" title=""><img src="/storage/image/{{$bayaan->image}}" alt="evnt-img1.jpg"></a>
                                                </div>
                                                <div class="evnt-info">
                                                    <h4 class="thaana1">{{$bayaan->title}}</h4>
                                                    <ul class="pst-mta">
                                                        <li class="thm-clr">{{$bayaan->created_at->diffForHumans()}}</li>
                                                        <li class="thm-clr thaana">{{$bayaan->author->name}}</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                {!! $bayaans->links(); !!}
                            </div><!-- Events Wrap -->
                        </div>
                    </div>
                </div><!-- Events & Prayer Wrap -->
            </div>
        </div>
    </section>

@endsection