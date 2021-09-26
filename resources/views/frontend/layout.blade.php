<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:description"
          content="Non profitable Organisation in H Dh Nolhivaran" />
    <meta name="keywords" content="Islamic-asociacion nolhivaran" />
    <meta property="og:site_name" content="JAMIYYATH RISAALAA" />
    @yield('metatag')
    {{--<link rel="icon" href="/storage/sitesetting/{{$sitesettings[0]->logo}}" sizes="32x32" type="image/png">--}}
    {{--<title> {{$sitesettings[0]->sitetitle}}</title>--}}

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/icons.min.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    @livewireStyles
</head>
<body>
<main>
    <header class="style2">
        <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-dark bg-brown fixed-top thaana" style="font-size: 13px;">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="{{URL::to('/')}}" title="Logo"><img width="30" height="auto" src="" alt="logo3.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 mb-lg-0  pr-5 pl-5 justify-content-center" style="font-size: 17px;" >
                            <li class="nav-item text-center pr-2">
                                <a class="nav-link active " aria-current="page" href="{{URL::to('/')}}">ފުރަތަމަ ސަފްހާ</a>
                            </li>
                            <li class="nav-item text-center pr-2">
                                <a class="nav-link" href="{{route('habaru')}}">ހެދިކާ</a>
                            </li>
                            <li class="nav-item text-center pr-2">
                                <a class="nav-link" href="{{route('habaru')}}">ރިހަ</a>
                            </li>
                            <li class="nav-item text-center pr-2">
                                <a class="nav-link" href="{{route('habaru')}}">ބަތް</a>
                            </li>
                            <li class="nav-item text-center pr-2">
                                <a class="nav-link" href="{{route('habaru')}}">ހޮވާލެވޭ</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-flex mr-auto  mb-2 mb-lg-0  pr-5 pl-5 justify-content-center" style="font-size: 12px;" >
                            @if(auth()->user())
                            <li class="nav-item text-center p-3">
                                <a href="" class="text-light m-2 p-2  text-xl-right " >ޑޭޝްބޯޑް</a>
                            </li>
                                @else
                                <li class="nav-item text-center p-3">
                                    <a  href="{{ route('login') }}" class="text-light m-2 p-2  text-xl-right " >ލޮގިން</a>
                                </li>
                                <li class="nav-item text-center p-3">
                                    <a href="{{ route('register') }}" class="text-light  text-xl-right " >ރެޖިސްޓާރ</a>
                                </li>
                            @endif
                            <li class="nav-item text-center pr-2">
                                <a href="{{route('wishlist')}}" style="font-size: 25px;" class="text-light nav-link" type="submit"><i class="fa fa-heart"></i><span class="badge">{{ count((array) session('c')) }}</span></a>
                            </li>
                        </ul>
                        <form class="d-flex mr-auto">
                        <input style="font-size: 12px;" class="form-control mr-2 ml-2" type="search" placeholder="ހޯދާ" aria-label="Search">
                        <button style="font-size: 12px;" class="btn btn-outline-light" type="submit">ހޯދާ</button>
                        </form>
                        <a href="{{route('unknown')}}" style="font-size: 12px;" class="btn btn-outline-light">ނޭންގުނު</a>
                        <div class="d-flex mr-auto">

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header><!-- Header -->

        @yield('content')

    <section id="subfooter" class="pt-2 mt-5 animate__animated animate__fadeIn bg-brown">
        <div class="container" style="padding-right: 5%; padding-left: 5%;">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p style="color: white;" class=" mb-2 thaana">މިބައިގަ ލާނީ ކޮން އެއްޗެއް</p>

                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 1" style="border: none; ">
                        <div class="card-body bg-brown">
                            <h5 class="card-title thaana text-light" >އަޅުގަނޑުމެންނަކީ</h5>
                            <h5><img class="" src="logo.png" ></h5>
                            <p class="utheemfont" style="color: white; font-size: 20px;">މިބައިގަ ލިޔާނީ ކުޑަ ހުލާސާކޮޅެއް ޖަމިއްޔާގެ</p>
                            <div class="">
                                <h4 class="thaana text-light">ފޮލޯކުރައްވާ</h4>
                                <a class="text-center" style="font-size: 50px; color: white;" href="https://www.facebook.com/mudhaaexpress/"><i class="fab fa-facebook"></i></a>
                                <a class="text-center" style="font-size: 50px; color: #fefefe; " href="https://www.facebook.com/mudhaaexpress/"><i class="fab fa-instagram-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="animate__animated animate__fadeIn" style="background-color: #0b0b0c">
        <footer class="card-footer">
            <p style="text-align: center; "><small style="color: white;">Copyright © 2020 Sufura. All rights reserved.</small> <small style="color: white;">Crafted with ❤ in Maldives. By <a href="">Sajidh.</a></small></p>
        </footer>
    </section>
</main><!-- Main Wrapper -->
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/pgb.js')}}"></script>
<script src="{{asset('/frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.thaana.js')}}"></script>
<script src="{{asset('js/star-rating.js')}}"></script>
<script type="text/javascript">
    jQuery('.thaana').thaana();
    jQuery('.utheemfont').thaana();

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@livewireScripts
</body>
</html>
