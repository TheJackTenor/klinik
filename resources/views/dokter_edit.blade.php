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
                                            <li><span class="bread-blod">User</span>
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
                                    <h1>Edit User</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">

                                                {!! Form::model($user, ['method'=>'POST','action' => ['UserController@update',$user->id], 'enctype' => 'multipart/form-data']) !!}
                                                <!--  -->
                                                {{csrf_field()}}

                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('name_user') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                {!! Form::label ('name_user', 'Nama', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::text ('name_user', $user->name_user, ['class' => 'form-control']) !!}

                                                                @if($errors->has('name_user'))
                                                                <span class="help-block">{{$errors->first('name_user')}}</span>
                                                                @endif
                                                            </div>
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
                                                                {!! Form::label ('email', 'Email', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::email ('email', $user->email, ['class' => 'form-control']) !!}

                                                                @if($errors->has('email'))
                                                                <span class="help-block">{{$errors->first('email')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('level') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                {!! Form::label ('level', 'Level', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">

                                                                    <input type="text" disabled="true" class="form-control" value="{{$user->level}}">

                                                                    <!-- {!! Form::text ('level', $user->level, ['class' => 'form-control', 'disabled']) !!} -->

                                                                    <!-- {{ Form::hidden('level', $user->level, ['class' => 'form-control']) }} -->
                                                                    
                                                                    <input name="level" id="level" type="hidden" class="form-control" value="{{$user->level}}" />

                                                                    @if($errors->has('level'))
                                                                    <span class="help-block">{{$errors->first('level')}}</span>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('password') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                {!! Form::label ('password', 'Password', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::password ('password', ['class' => 'form-control']) !!}

                                                                @if($errors->has('password'))
                                                                <span class="help-block">{{$errors->first('password')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                                
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                {!! Form::label ('password_confirmation', 'Konfirmasi Password', ['class'=>'login2 pull-right pull-right-pro']) !!}
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                {!! Form::password ('password_confirmation', ['class' => 'form-control']) !!}
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