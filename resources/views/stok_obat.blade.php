@if(Auth::check() && Auth::user()->level=='dokter' || Auth::user()->level=='superadmin')

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
                                            <li><span class="bread-blod">Obat</span>
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


        <div class="advanced-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline16-list responsive-mg-b-30">
                            <div class="sparkline16-hd">
                                <div class="main-sparkline16-hd">
                                    <h1>Laporan Stok Obat</h1>
                                </div>
                            </div>
                            <div class="sparkline16-graph">
                                <div class="date-picker-inner">
                                    <div class="form-group data-custon-pick" id="data_4">
                                        <label>Pilih Bulan :</label>
                                        <form action="{{ url('cari_lapstok')}}" method="GET">
                                        @csrf
                                        <div class="form-group-inner">
                                        <div class="input-daterange input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" name="dari" value="">
                                            <span class="input-group-addon">sampai</span>
                                            <input type="text" class="form-control" name="sampai" value="">
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-success"><i aria-hidden="true"></i> Cari </button>             
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Table Start -->
        @if(isset($stok))
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">

                <div id="siswa">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Daftar Stok Obat</h1>
                                </div>
                            </div>
                            <a href="{{url('export_stok/'.$dari.'/'.$sampai)}}"><button type="button" class="btn btn-custon-four btn-success"><i aria-hidden="true"></i> Export to Excel </button></a>
                            <br>
                            
                            <br>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                

                                
                                    <!-- <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>                     -->

                                    <table class="table table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <th data-field="tanggal" >Tanggal</th>
                                                <th data-field="namaobat" >Nama Obat</th>
                                                <th data-field="stok" >Stok</th>
                                                <th data-field="stokout" >Stok Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($stok as $so)
                                            <tr>
                                                <!-- <td></td> -->
                                                <td>{{$so->tgl}}</td>

                                                
                                                <td>{{$so->obat->nama_obat}}</td> 

                                                <td>{{$so->stok}}</td>
                                                <td>{{$so->stok_out}}</td>
                                                           
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
        @endif

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
                                            <li><span class="bread-blod">Obat</span>
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