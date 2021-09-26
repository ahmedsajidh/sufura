<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Risaalaa Admin | Write anything you want</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/backend/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/backend/dist/css/adminlte.css">
    {{--<link rel="stylesheet" href="{{asset('/css/style.css')}}">--}}
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed ">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            {{--<li class="nav-item d-none d-sm-inline-block">--}}
                {{--<a href="index3.html" class="nav-link">Home</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item d-none d-sm-inline-block">--}}
                {{--<a href="#" class="nav-link">Contact</a>--}}
            {{--</li>--}}
        </ul>

        <!-- SEARCH FORM -->
        {{--<form class="form-inline ml-3">--}}
            {{--<div class="input-group input-group-sm">--}}
                {{--<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<div class="input-group-append">--}}
                    {{--<button class="btn btn-navbar" type="submit">--}}
                        {{--<i class="fas fa-search"></i>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            {{--<!-- Messages Dropdown Menu -->--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
                    {{--<i class="far fa-comments"></i>--}}
                    {{--<span class="badge badge-danger navbar-badge">3</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<!-- Message Start -->--}}
                        {{--<div class="media">--}}
                            {{--<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
                            {{--<div class="media-body">--}}
                                {{--<h3 class="dropdown-item-title">--}}
                                    {{--Brad Diesel--}}
                                    {{--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
                                {{--</h3>--}}
                                {{--<p class="text-sm">Call me whenever you can...</p>--}}
                                {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Message End -->--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<!-- Message Start -->--}}
                        {{--<div class="media">--}}
                            {{--<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
                            {{--<div class="media-body">--}}
                                {{--<h3 class="dropdown-item-title">--}}
                                    {{--John Pierce--}}
                                    {{--<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
                                {{--</h3>--}}
                                {{--<p class="text-sm">I got your message bro</p>--}}
                                {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Message End -->--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<!-- Message Start -->--}}
                        {{--<div class="media">--}}
                            {{--<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
                            {{--<div class="media-body">--}}
                                {{--<h3 class="dropdown-item-title">--}}
                                    {{--Nora Silvester--}}
                                    {{--<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
                                {{--</h3>--}}
                                {{--<p class="text-sm">The subject goes here</p>--}}
                                {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Message End -->--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<!-- Notifications Dropdown Menu -->--}}
            <li class="nav-item dropdown">
                {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
                    {{--<i class="far fa-bell"></i>--}}
                    {{--<span class="badge badge-warning navbar-badge">15</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
                    {{--<span class="dropdown-item dropdown-header">15 Notifications</span>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<i class="fas fa-envelope mr-2"></i> 4 new messages--}}
                        {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<i class="fas fa-users mr-2"></i> 8 friend requests--}}
                        {{--<span class="float-right text-muted text-sm">12 hours</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<i class="fas fa-file mr-2"></i> 3 new reports--}}
                        {{--<span class="float-right text-muted text-sm">2 days</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
                {{--</div>--}}
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="/backend/dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Jamiyyath Risaala</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                            <li class="nav-item">
                                <a href="{{Route('all-posts')}}" class="nav-link {{request()->route()->named('all-posts') ? 'active' : ''}}">
                                    <i class="fas fa-newspaper"></i>
                                    <p>Post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('all-categories')}}" class="nav-link {{request()->route()->named('all-categories') ? 'active' : ''}}">
                                    <i class="fas fa-folder-open"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('all-tags')}}" class="nav-link {{request()->route()->named('all-tags') ? 'active' : ''}}">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Tags </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('video')}}" class="nav-link {{request()->route()->named('video') ? 'active' : ''}}">
                                    <i class="fab fa-youtube"></i>
                                    <p> Video</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('slider-index')}}" class="nav-link {{request()->route()->named('slider-index') ? 'active' : ''}}">
                                     <i class="fas fa-images"></i>
                                    <p> Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('dashboard-events')}}" class="nav-link {{request()->route()->named('dashboard-events') ? 'active' : ''}}">
                                     <i class="fas fa-plus"></i>
                                    <p> Events</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('dashboard-register')}}" class="nav-link {{request()->route()->named('dashboard-register') ? 'active' : ''}}">
                                     <i class="fas fa-user"></i>
                                    <p>Program Registerer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('sitesetting-edit',['id' => 1])}}" class="nav-link {{request()->route()->named('sitesetting-edit',['id' => 1]) ? 'active' : ''}}">
                                    <i class="fas fa-cog"></i>
                                    <p> Site Setting</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="btn btn-success btn-flat"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           @yield('header')
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <p style="text-align: center;"><small style="color: black;">Copyright © 2020 Jamiyyath Risaalaa. All rights reserved.</small> <small style="color: black;">Crafted with ❤ in Maldives. By <a href="">Sajidh.</a></small></p>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="/backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="/backend/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Summernote -->
<script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/backend/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backend/dist/js/demo.js"></script>
<script src="/backend/thaana/jquery.thaana.js"></script>

<script src="http://www.jawish.org/blog/uploads/jtk-4.2.1.pack.js"></script>
<script src="/backend/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="/backend/plugins/select2/js/select2.full.js"></script>


<script>
    $('.thaana').thaana();
    $('.editor_ifr').thaana();
    $('.tox-tinymce').thaana();
    $('.mce-content-body').thaana();
    thaanaKeyboard.defaultKeyboard = 'phonetic';
    tinymce.init({
        selector:'#editor',
        plugins: "image",
        menubar: "insert",
        image_caption: true,
        toolbar: 'jtklanguage | image undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',

    });
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        })
    })

</script>
@yield('js')
</body>
</html>
