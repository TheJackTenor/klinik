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
                                            <li><span class="bread-blod">Laporan</span>
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
                                    <h1>Laporan Kunjungan</h1>
                                </div>
                            </div>
                            <div class="sparkline16-graph">
                                <div class="date-picker-inner">
                                    <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                                        <label>Pilih Tanggal :</label>
                                        <form action="{{ url('cari_lapkunjungan')}}" method="GET">
                                        @csrf
                                        <div class="form-group-inner">
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input type="text" class="form-control" name="dari" value="" placeholder="dari" />
                                            <span class="input-group-addon">sampai</span>
                                            <input type="text" class="form-control" name="sampai" value="" placeholder="sampai" />
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


		@if (isset($kunjungan1))
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Data Kunjungan</h1>
                                </div>
                            </div>
                            <a href="{{url('export_kunjungan/'.$dari.'/'.$sampai)}}"><button type="button" class="btn btn-custon-four btn-success"><i aria-hidden="true"></i> Export to Excel </button></a>
                            <br><br>
                            <label>Jumlah Kunjungan   : <font style="font-size: 23px; color: red; border: ">{{  $jumlah_kunjungan}}</font></label>
                            
                    	<div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                        

                            <table class="table table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <th data-field="tanggal">Tanggal</th>
                                    <th data-field="no_rm">No. Rekam Medis</th>
                                    <th data-field="nama_pasien">Nama Pasien</th>
                                    <th data-field="keluhan">Keluhan</th>
                                    <th data-field="pemeriksaan">Pemeriksaan</th>
                                    <th data-field="nama_dokter">Nama Dokter</th>
                                    
                                </thead>
                                <tbody>
                                	@foreach ($kunjungan1 as $k)
                                    <tr>
                                        <td>{{$k->tgl}}</td>
                                        <td>{{$k->no_rm}}</td>
                                        <td>{{$k->nama_pasien}}</td>
                                        <td>{{$k->keluhan}}</td>
                                        <td>{{$k->pemeriksaan}}</td>
                                        <td>{{$k->name}}</td>
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
                                            <li><span class="bread-blod">Laporan</span>
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