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
                                    <h1>Edit Pasien</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">

                                                {!! Form::model($pasien, ['method'=>'POST','action' => ['PasienController@update',$pasien->id], 'enctype' => 'multipart/form-data']) !!}
                                                <!--  -->
                                                {{csrf_field()}}

                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('no_rm') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                {!! Form::label ('no_rm', 'Nomor Rekam Medis', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('no_rm', $pasien->no_rm, ['class' => 'form-control','readonly']) !!}

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
                                                                {!! Form::label ('nama_pasien', 'Nama', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('nama_pasien', $pasien->nama_pasien, ['class' => 'form-control','readonly']) !!}
                                                                


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
                                                                {!! Form::label ('tempat_lahir', 'Tempat Lahir', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('tempat_lahir', $pasien->tempat_lahir, ['class' => 'form-control','readonly']) !!}

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
                                                                {!! Form::label ('tanggal_lahir', 'Tanggal Lahir', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('tanggal_lahir', $pasien->tanggal_lahir, ['class' => 'form-control','readonly']) !!}

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
                                                                {!! Form::label ('jenis_kelamin', 'Jenis Kelamin', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                {!! Form::text ('jenis_kelamin', $pasien->jenis_kelamin, ['class' => 'form-control','readonly']) !!}
                                                                
                                                                @if($errors->has('jenis_kelamin'))
                                                                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                                                                @endif
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
                                                                {!! Form::label ('alamat', 'Jenis Kelamin', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('alamat', $pasien->alamat, ['class' => 'form-control']) !!}

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
                                                    {!! Form::close() !!}   
                                                    

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