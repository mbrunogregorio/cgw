<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>CGW Brasil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <!--Google Font link-->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">

    <!-- xsslider slider css -->


    <!--<link rel="stylesheet" href="css/xsslider.css">-->


    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--<link rel="stylesheet" href="css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div><!--End off Preloader -->


<div class="culmn">
    <!--Home page style-->


    <nav class="navbar navbar-default bootsnav navbar-fixed">
        <div class="navbar-top bg-grey fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="navbar-callus text-left sm-text-center">
                            <ul class="list-inline">
                                <li><a href=""><i class="fa fa-phone"></i> Telefone: (27) 3241-7267</a></li>
                                <li><a href=""><i class="fa fa-envelope-o"></i> E-mail: vendas@cgwbrasil.com.br</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="navbar-socail text-right sm-text-center">
                            <ul class="list-inline">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-behance"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->


        <div class="container">
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
                    <!--<img src="images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                </a>

            </div>
            <!-- End Header Navigation -->

            <!-- navbar menu -->
            @include('layouts.main_menu')
            <!-- /.navbar-collapse -->
        </div>

    </nav>

    <!--Home Sections-->

    @yield('content')


    @include('layouts.footer')


</div>

<!-- JS includes -->

<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('css/slick/slick.js') }}"></script>
<script src="{{ asset('css/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.collapse.js') }}"></script>
<script src="{{ asset('js/bootsnav.js') }}"></script>


<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
