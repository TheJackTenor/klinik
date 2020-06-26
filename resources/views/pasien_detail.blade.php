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
                                            <li><span class="bread-blod">Pasien</span>
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
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Detail Pasien</h1>
                                </div>
                            </div>
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

                            <div align="center" >
                                <a href="{{url('rekammedis/'.$pasien->id.'/create')}}"><button type="button" class="btn btn-custon-four btn-primary"><i aria-hidden="true"></i> Tambah </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Rekam Medis</h1>
                                </div>
                            </div>
                            <br>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table class="table" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" width="100%">
                                <thead>
                                    <th>Tanggal</th>
                                    <th>Keluhan</th>
                                    <th>Pemeriksaan</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <th>Dokter</th>
                                    <th width="10%">Action</th>
                                </thead>
                                <tbody>
                                    @foreach($pasien->rekammedis as $rm)
                                    <tr>
                                        <td>{{$rm->tgl}}</td>
                                        <td>{{$rm->keluhan}}</td>
                                        <td>{{$rm->pemeriksaan}}</td>
                                        <td>
                                            @foreach($rm->diagnosa as $dg)
                                            {{$dg->nama_diagnosa}} ({{$dg->kode_diagnosa}}),
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($rm->tindakan as $td)
                                            {{$td->nama_tindakan}} ({{$td->kode_tindakan}}),
                                            @endforeach

                                        </td>
                                        <td>
                                            {{$rm->dokter->name}}
                                        </td>
                                        <td>
                                            <a href="{{url('pasien/'.$pasien->id.'/rekammedis/'.$rm->id)}}"><button data-toggle="tooltip" title="Detail" class="pd-setting-ed"><i class="fa fa-search" aria-hidden="true"></i></button></a>  
                                        </td>
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



@endsection()