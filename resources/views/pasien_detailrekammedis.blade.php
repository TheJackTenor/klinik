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
                                            <li><span class="bread-blod">Rekam Medis</span>
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

        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Rekam Medis</h1>
                                    <h5 style="text-align: right;" >{{$rekammedis->tgl}}</h5>
                                </div>
                            </div>
                            <br>

                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table table-striped">
                                            <tr>                                                
                                                <th>No. Rekam Medis</th>
                                                <td>{{$pasien->no_rm}}</td>
                                            </tr>
                                            <tr>                                                
                                                <th>Nama</th>
                                                <td>{{$pasien->nama_pasien}}</td>
                                            </tr>
                                            <tr>                                    

                                                <th>TTL</th>
                                                <td>{{$pasien->tempat_lahir}}, {{$pasien->tanggal_lahir}}</td>
                                            </tr>
                                            <tr>                                                
                                                <th>Jenis Kelamin</th>
                                                <td>{{$pasien->jenis_kelamin}}</td>
                                            </tr>
                                            <tr>                                                
                                                <th>Alamat</th>
                                                <td>{{$pasien->alamat}}</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 center" >
                        <div class="sparkline12-list" >
                            <div class="sparkline12-hd" >
                                <div class="main-sparkline12-hd" style="border-top-style: dotted;
                                    border-right-style: solid; border-bottom-style: dotted; border-left-style: solid;">
                                    <br>
                                    <br>
                                    <h5 style="text-align: center;" >
                                        Oleh Dokter :
                                    </h5>
                                    <center><h1>{{$rekammedis->dokter->name}}</h1></center>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">KELUHAN</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                    {{$rekammedis->keluhan}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">PEMERIKSAAN</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                    {{$rekammedis->pemeriksaan}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">RIWAYAT</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                    <!-- {{$rekammedis->riwayat}} -->
                                @foreach($rekammedis->riwayat as $rw)
                                    {{$rw->riwayat}}
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">PENUNJANG</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                    {{$rekammedis->penunjang}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">DIAGNOSA</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                @foreach($rekammedis->diagnosa as $dg)
                                    {{$dg->nama_diagnosa}} ({{$dg->kode_diagnosa}})
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">TINDAKAN</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                @foreach($rekammedis->tindakan as $td)
                                    {{$td->nama_tindakan}} ({{$td->kode_tindakan}})
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <h4 style="text-align: center">PENGOBATAN</h4>
                            </div>
                            <div class="panel-body blog-pra">
                                @foreach($rekammedis->pengobatan as $pb)
                                    {{$pb->nama_obat}} <b>({{$pb->pivot->aturan}})</b> ({{$pb->pivot->jumlah}})
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>



@endsection()