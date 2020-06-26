<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Praktek | Dokter Hermawan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/meanmenu.min.css')}}">
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
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/editor/select2.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/editor/datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/editor/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/editor/x-editor-style.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/data-table/bootstrap-editable.css')}}">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/modals.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/form/all-type-forms.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/select2/select2.min.css')}}">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/chosen/bootstrap-chosen.css')}}">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/datapicker/datepicker3.css')}}">
     <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backend/css/touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>


    <!-- select pengobatan -->
    <!-- <link rel="stylesheet" href="{{asset('include/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('include/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('include/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('include/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('include/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('include/css/bootstrap.min.css')}}"> -->
    <script src="{{asset('include/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('include/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('include/js/bootstrap.js')}}"></script>    
    <script src="{{asset('include/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('include/js/jquery.min.js')}}"></script>
    
    <script src="{{asset('backend/klinikapp.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('backend/img/logo/logo1.png')}}" alt="" /></a>
                <strong><img src="{{asset('backend/img/logo/logosn.png')}}" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">

                        @if (!empty($halaman) && $halaman == 'dashboard')
                        <li class="active">                            
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('dashboard')}}"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Dashboard</b></span></a></li>
                            </ul>
                        </li>                        
                        @else
                        <li><a href="{{route('dashboard')}}"><i class="fa big-icon fa-home icon-wrap" aria-hidden="true"></i> Dashboard</a></li>
                        @endif
                        
                        @if(Auth::check() && Auth::user()->level=='dokter' || Auth::check() && Auth::user()->level=='admin' || Auth::check() && Auth::user()->level=='superadmin')
                        @if (!empty($halaman) && $halaman == 'pasien')
                        <li class="active">                            
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('pasien')}}"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Data Pasien</b></span></a></li>
                            </ul>
                        </li>
                        @else
                        <li><a href="{{route('pasien')}}"><i class="fa big-icon fa-female icon-wrap" aria-hidden="true"></i> Data Pasien</a></li>
                        @endif
                        @endif
                        
                        @if(Auth::check() && Auth::user()->level=='dokter' || Auth::check() && Auth::user()->level=='superadmin')
                        @if (!empty($halaman) && $halaman == 'diagnosa')
                        <li class="active">
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Options</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('diagnosa')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Diagnosa</b></span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('tindakan')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tindakan Medis</span></a></li>
                            </ul>
                        </li>
                        @elseif (!empty($halaman) && $halaman == 'tindakan')
                        <li class="active">
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Options</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('diagnosa')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Diagnosa</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('tindakan')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Tindakan Medis</b></span></a></li>
                            </ul>
                        </li>
                        @else
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Options</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('diagnosa')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Diagnosa</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('tindakan')}}"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tindakan Medis</span></a></li>
                            </ul>
                        </li>
                        @endif
                        @endif
                        
                        @if(Auth::check() && Auth::user()->level=='dokter' || Auth::check() && Auth::user()->level=='superadmin' )
                        @if (!empty($halaman) && $halaman == 'obat')
                        <li class="active">                            
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('obat')}}"><i class="fa fa-flask sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Data Obat</b></span></a></li>
                            </ul>
                        </li>                        
                        @else
                        <li><a href="{{route('obat')}}"><i class="fa big-icon fa-flask icon-wrap" aria-hidden="true"></i> Data Obat</a></li>
                        @endif
                        @endif

                        @if(Auth::check() && Auth::user()->level=='superadmin' )
                        @if (!empty($halaman) && $halaman == 'dokter')
                        <li class="active">
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('dokter')}}"><i class="fa fa-tree sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Data Dokter</b></span></a></li>
                            </ul>
                        </li>
                        @else
                        <li><a href="{{route('dokter')}}"><i class="fa big-icon fa-tree icon-wrap" aria-hidden="true"></i>Data Dokter</a></li>
                        @endif
                        @endif

                        @if(Auth::check() && Auth::user()->level=='superadmin' )
                        @if (!empty($halaman) && $halaman == 'admin')
                        <li class="active">
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('admin')}}"><i class="fa fa-tree sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Data Admin</b></span></a></li>
                            </ul>
                        </li>
                        @else
                        <li><a href="{{route('admin')}}"><i class="fa big-icon fa-tree icon-wrap" aria-hidden="true"></i>Data Admin</a></li>
                        @endif
                        @endif
                        
                        @if(Auth::check() && Auth::user()->level=='dokter' || Auth::check() && Auth::user()->level=='superadmin')
                        @if (!empty($halaman) && $halaman == 'lap-kunjungan')
                        <li class="active">
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-line-chart icon-wrap"></i> <span class="mini-click-non">Laporan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('lap_kunjungan')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Laporan Kunjungan</b></span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('lap_stok')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Laporan Stok</span></a></li>
                            </ul>
                        </li>
                        @elseif (!empty($halaman) && $halaman == 'lap-stok')
                        <li class="active">
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-line-chart icon-wrap"></i> <span class="mini-click-non">Laporan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('lap_kunjungan')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Laporan Kunjungan</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('lap_stok')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro"><b>Laporan Stok</b></span></a></li>
                            </ul>
                        </li>
                        @else
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-line-chart icon-wrap"></i> <span class="mini-click-non">Laporan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('lap_kunjungan')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Laporan Kunjungan</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{route('lap_stok')}}"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Laporan Stok</span></a></li>
                            </ul>
                        </li>
                        @endif
                        @endif


                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{asset('backend/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">.</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                @if (Auth::check())
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">{{Auth::user()->name}}</span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-lock author-log-ic"></span>Log Out</a>

                                                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                @else
                                                <li class="nav-item">
                                                    <a href="{{route('login')}}"  class="nav-link">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span>Login</span>

                                                    </a>
                                                </li>
                                                @endif
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            


@yield('content')



        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2020 Praktek Dokter Hermawan Surya D.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('backend/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('backend/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('backend/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('backend/js/morrisjs/morris-active-pro.js')}}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{asset('backend/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('backend/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('backend/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{asset('backend/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('backend/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('backend/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('backend/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('backend/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('backend/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('backend/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('backend/js/data-table/bootstrap-table-export.js')}}"></script>
    <!--  editable JS
        ============================================ -->
    <script src="{{asset('backend/js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{asset('backend/js/editable/mock-active.js')}}"></script>
    <script src="{{asset('backend/js/editable/select2.js')}}"></script>
    <script src="{{asset('backend/js/editable/moment.min.js')}}"></script>
    <script src="{{asset('backend/js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('backend/js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{asset('backend/js/editable/xediable-active.js')}}"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="{{asset('backend/js/chart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backend/js/peity/peity-active.js')}}"></script>
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

    <!-- datapicker JS
        ============================================ -->
    <script src="{{asset('backend/js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('backend/js/datapicker/datepicker-active.js')}}"></script>

    <!-- chosen JS
        ============================================ -->
    <script src="{{asset('backend/js/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('backend/js/chosen/chosen-active.js')}}"></script>
    <!-- select2 JS
        ============================================ -->
    <script src="{{asset('backend/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/js/select2/select2-active.js')}}"></script>
    <!-- touchspin JS
        ============================================ -->
    <script src="{{asset('backend/js/touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('backend/js/touchspin/touchspin-active.js')}}"></script>

    <!-- alert notifikasi JS
        ============================================ -->
    <script src="{{asset('backend/klinikapp.js')}}"></script>
</body>

</html>