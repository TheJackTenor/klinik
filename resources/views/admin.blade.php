@if(Auth::check() && Auth::user()->level=='superadmin')

@extends('layouts')
@section('content')


            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Admin</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">

                <div id="admin">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Daftar Admin</h1>
                                </div>
                            </div>
                            <br>
                            <div>
                                <a href="admin/create"><button type="button" class="btn btn-custon-four btn-primary"><i aria-hidden="true"></i> Tambah </button></a>
                            </div>
                            <br>
                            <div class="pull-left">
                                <strong>Jumlah Admin : {{$jumlah_admin}}</strong>
                            </div>
                            <br>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                @if(Session::has('flash_message'))
                                    <div class="alert alert-success {{Session::has('penting') ? 'alert-important' : ''}}">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{Session::get('flash_message')}}                                        
                                    </div>
                                @endif

                                @if(Session::has('flash_message_update'))
                                    <div class="alert alert-info {{Session::has('penting') ? 'alert-important' : ''}}">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{Session::get('flash_message_update')}}                                        
                                    </div>
                                @endif

                                @if(Session::has('flash_message_delete'))
                                    <div class="alert alert-danger {{Session::has('penting') ? 'alert-important' : ''}}">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{Session::get('flash_message_delete')}}                                        
                                    </div>
                                @endif

                                @if(count($admin)>0)
                                    <!-- <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>        -->                            

                                    <table class="table table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <th data-field="nama">Nama</th>
                                                <th data-field="email">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($admin as $admn): ?>
                                            <tr>
                                                <!-- <td></td> -->
                                                <td>{{$admn->name}}</td>
                                                <td>{{$admn->email}}</td>
                                                
                                                                                                
                                            </tr>
                                            <?php endforeach ?>                                            
                                        </tbody>
                                    </table>
                                    @else
                                        <br>
                                    <br>
                                        <p>
                                            Tidak Ada Data Admin
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>

@endsection()

@else
@section('content')
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dokter</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel">
                    <div class="panel-body text-center lock-inner">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <br/>
                        <h4><span class="text-success">Maaf</span> <strong>, Anda Tidak Dapat Membuka Data</strong></h4>
                        <p>Anda Tidak Memiliki Hak Akses.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
    </div>


        <br>
        <br>
@endsection()
@endif