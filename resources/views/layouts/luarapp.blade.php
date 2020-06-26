<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Praktek | Dokter Hermawan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/img/favicon.ico')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/normalize.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/form/all-type-forms.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>


    <!-- KEBUTUHAN LOGIN -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="{{route('dashboard')}}" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>

    

                                        <br>
                                        <br>
    <div class="container-fluid">

        @yield('content2')

    </div>

    <!-- jquery
        ============================================ -->
    <script src="{{asset('backend/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('backend/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('backend/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('backend/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('backend/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('backend/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
        ============================================ -->
    <script src="{{asset('backend/js/tab.js')}}"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="{{asset('backend/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('backend/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('backend/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('backend/js/main.js')}}"></script>
</body>

</html>

