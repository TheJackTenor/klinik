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

        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Tambah Admin</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="{{url('admin')}}" method="POST">
                                                @csrf

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('name') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="name" class="login2 pull-right pull-right-pro">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="name" id="name" type="text" class="form-control" value="{{old('nama')}}"/>

                                                                @if($errors->has('name'))
                                                                <span class="help-block">{{$errors->first('name')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('email') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="email" class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="email" id="email" type="email" class="form-control" value="{{old('email')}}"/>

                                                                @if($errors->has('email'))
                                                                <span class="help-block">{{$errors->first('email')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('level') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="level" class="login2 pull-right pull-right-pro">Level</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                                                
                                                                    <input name="level" id="level" type="hidden" class="form-control" value="admin" />
                                                                    <input type="text" disabled="true" placeholder="Admin" class="form-control" >
                                                                

                                                                    @if($errors->has('level'))
                                                                    <span class="help-block">{{$errors->first('level')}}</span>
                                                                    @endif

                                                            </div>
                                                        </div>
                                                    </div>  

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('password') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="password" class="login2 pull-right pull-right-pro">Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="password" id="password" type="password" class="form-control" />

                                                                @if($errors->has('password'))
                                                                <span class="help-block">{{$errors->first('password')}}</span>
                                                                @endif

                                                            </div>
                                                        </div>   
                                                    </div>

                                                @if($errors->any())
                                                    <div  class="form-group-inner {{$errors->has('password_confirmation') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="password_confirmation" class="login2 pull-right pull-right-pro">Konfirmasi Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input name="password_confirmation" id="password_confirmation" type="password" class="form-control" />

                                                                @if($errors->has('password_confirmation'))
                                                                <span class="help-block">{{$errors->first('password_confirmation')}}</span>
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