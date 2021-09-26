@extends('frontend.layout')
@section('metatag')
    <meta property="og:title" content="Jamiyath Risaalaa" />
    <meta property="og:url" content="https://www.jamiyathrisaalaa.com/" />
    <meta property="og:image" content="https://one-media.sgp1.digitaloceanspaces.com/post/b_7jDZaRpXPbyJS21033PsVIiHl.jpg" />
@endsection
@section('content')
    {{--fahuge post thahh--}}
    <section class="pt-5 pb-5 animate__animated animate__fadeIn" style="  margin-top: 70px;">
        <div class="container">
            <div class="row rtl">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card w-100">
                                <img width="240" src="https://lh3.googleusercontent.com/proxy/6jW_OBvU304WR6vk7USKQTpZphJHEO3BIZV0Q4uQVvfya7Bv0CupAlXRQclWJ1QrDeGyYmEISt8f-aFXGbYY7QfzLDkAGmOsT1BT9EqlxAKmEZFc58Ti93yljz7HfxUctWfNUA3Af9BEOw">
                            </div>
                            <p class="card-text thaana p-2">އަހުމަދު ސާޖިދު</p>
                            <div class="Progress">
                                <div class="Bar" data-value="{{$userrating}}"><div class="name"></div><div class="pct">{{$userrating}}</div></div>
                            </div>
                            @if($userrating >= 2)
                                <div class="thaana">ބޮޑު ކައްކާ</div>
                                @endif
                        </div>
                    </div>    
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </section>
@endsection
