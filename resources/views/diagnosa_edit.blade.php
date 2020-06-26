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
                                            <li><span class="bread-blod">Diagnosa</span>
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
                                    <h1>Edit Diagnosa</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">

                                                {!! Form::model($diagnosa, ['method'=>'POST','action' => ['DiagnosaController@update',$diagnosa->id], 'enctype' => 'multipart/form-data']) !!}
                                                <!--  -->
                                                {{csrf_field()}}
                                                
                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('nama_diagnosa') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                {!! Form::label ('nama_diagnosa', 'Nama', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('nama_diagnosa', $diagnosa->nama_diagnosa, ['class' => 'form-control']) !!}

                                                                 @if($errors->has('nama_diagnosa'))
                                                                <span class="help-block">{{$errors->first('nama_diagnosa')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('kode_diagnosa') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                {!! Form::label ('kode_diagnosa', 'Kode ICD 10', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('kode_diagnosa', $diagnosa->kode_diagnosa, ['class' => 'form-control']) !!}

                                                                @if($errors->has('kode_diagnosa'))
                                                                <span class="help-block">{{$errors->first('kode_diagnosa')}}</span>
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
                                                    <br>
                                                    <br>
                                                    <br> 

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