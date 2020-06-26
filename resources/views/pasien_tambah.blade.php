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

        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Tambah Pasien</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="{{url('pasien')}}" method="POST">
                                                @csrf

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('no_rm') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="no_rm" class="login2 pull-right pull-right-pro">Nomor Rekam Medis</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="no_rm" id="no_rm" type="text" class="form-control" value="{{old('no_rm')}}"/>

                                                                @if($errors->has('no_rm'))
                                                                <span class="help-block">{{$errors->first('no_rm')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('nama_pasien') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="nama_pasien" class="login2 pull-right pull-right-pro">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="nama_pasien" id="nama_pasien" type="text" class="form-control" value="{{old('nama_pasien')}}"/>

                                                                @if($errors->has('nama_pasien'))
                                                                <span class="help-block">{{$errors->first('nama_pasien')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('tempat_lahir') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="tempat_lahir" class="login2 pull-right pull-right-pro">Tempat Lahir</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control" value="{{old('tempat_lahir')}}" />

                                                                @if($errors->has('tempat_lahir'))
                                                                <span class="help-block">{{$errors->first('tempat_lahir')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="tanggal_lahir" class="login2 pull-right pull-right-pro">Tanggal Lahir</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="input-group date">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control" value="{{old('tanggal_lahir')}}">
                                                                </div>

                                                                @if($errors->has('tanggal_lahir'))
                                                                <span class="help-block">{{$errors->first('tanggal_lahir')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div> 

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                <label for="jenis_kelamin" class="login2 pull-right pull-right-pro">Jenis Kelamin</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                <div class="bt-df-checkbox">
                                                                    <label><input class="pull-left radio-checked" type="radio" checked="" value="L" name="jenis_kelamin" id="jenis_kelamin"> Laki-laki </label><br>
                                                                    <label><input class="pull-left radio-checked" type="radio" checked="" value="P" name="jenis_kelamin" id="jenis_kelamin"> Perempuan </label>

                                                                    @if($errors->has('jenis_kelamin'))
                                                                    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('alamat') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="alamat" class="login2 pull-right pull-right-pro">Alamat</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="alamat" id="alamat" type="text" class="form-control" value="{{old('alamat')}}"/>

                                                                @if($errors->has('alamat'))
                                                                <span class="help-block">{{$errors->first('alamat')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>   
                                                    </div>
                                                


                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left">
                                                                        <!-- <button class="btn btn-white" type="submit" onclick="kembali();">Kembali</button> -->
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit"> Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                       
                                                    <br>
                                                    <br>
                                                    <br> 
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->

@endsection()