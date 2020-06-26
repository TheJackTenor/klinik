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
                                    <h1>Periksa</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        
                                            <div class="all-form-element-inner">

                                                <form action="{{url('rekammedis')}}" method="POST">
                                                @csrf
                                                <input name="id_pasien" id="id_pasien" type="hidden" class="form-control" value="{{$pasien->id}}" />
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="form-group-inner">
                                                        <div class="row">                                         
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <h4>{{Carbon\Carbon::now()->format('d - m - Y')}} </h4>
                                                                <h5>{{Carbon\Carbon::now()->format('H:i')}} </h5>
                                                                <input name="tgl" id="tgl" type="hidden" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d')}}" />  
                                                                <font style="color: red; "><b>(*) = harus diisi</b></font>    
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if(Auth::check() && Auth::user()->level=='dokter'  || Auth::check() && Auth::user()->level=='superadmin')
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="keluhan" class="login2 pull-left pull-left-pro"> Oleh Dokter : </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <label class="form-control">{{Auth::user()->name}} </label>
                                                                
                                                            </div>
                                                            <input name="id_dokter" id="id_dokter" type="hidden" class="form-control" value="{{Auth::user()->id}}" />
                                                        </div>
                                                    </div>
                                                    @endif

                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('keluhan') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="keluhan" class="login2 pull-left pull-left-pro">Keluhan</label>
                                                                <font style="color: red; "><b>*</b></font>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea name="keluhan" id="keluhan" class="form-control" style="min-width: 100%" >{{old('keluhan')}}</textarea>

                                                                @if($errors->has('keluhan'))
                                                                <span class="help-block">{{$errors->first('keluhan')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                


                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="riwayat" class="login2 pull-left pull-left-pro">Riwayat Penyakit</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                @foreach($list_riwayat as $rw)
                                                                    <input type="text" name="riwayat1[]" disabled="true" class="form-control" value="{{$rw->riwayat}}">
                                                                    <input type="hidden" name="riwayat1[]" class="form-control riwayat" value="{{$rw->riwayat}}">
                                                                    <br>
                                                                @endforeach
                                                                <div class="modal-area-button">
                                                                    <a class="btn btn-custon-four btn-primary" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Riwayat</a>
                                                                </div>
                                                                <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-close-area modal-close-df ">
                                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <i class="fa fa-check modal-check-pro"></i>
                                                                                <h2>Riwayat Pasien</h2>
                                                                                <p>Tambah Data Riwayat Pasien</p>
                                                                                <br>
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <th width="90%" style="text-align: center;">Riwayat</th>
                                                                                        <th style="text-align: center" width="10%"><a href="javascript:void();" class="addRowRiwayat"><i class="glyphicon glyphicon-plus"></i></a></th>
                                                                                    </thead>
                                                                                    <tbody class="riwayat">
                                                                                        <tr>
                                                                                            <!-- <td><input type="text" name="riwayat2[]" class="form-control riwayat2"></td>
                                                                                            
                                                                                            <td><input type="text" name="stok[]" class="form-control stok" disabled="true"></td>
                                                                                            <input type="hidden" name="stok[]" class="form-control stok">

                                                                                            <td style="text-align: center"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td> -->
                                                                                        <!-- </tr> -->
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <a href="{{url('rekammedis/'.$pasien->id.'/create')}}"><button type="button" class="btn btn-custon-four btn-primary"><i aria-hidden="true"></i> Tambah Riwayat </button></a> -->
                                                            </div>
                                                        </div>
                                                    </div>  


                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('pemeriksaan') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="pemeriksaan" class="login2 pull-left pull-left-pro">Pemeriksaan Fisik</label>
                                                                <font style="color: red; "><b>*</b></font>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea name="pemeriksaan" id="pemeriksaan" class="form-control" style="min-width: 100%" >{{old('pemeriksaan')}}</textarea>

                                                                @if($errors->has('pemeriksaan'))
                                                                <span class="help-block">{{$errors->first('pemeriksaan')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="penunjang" class="login2 pull-left pull-left-pro">Penunjang</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea name="penunjang" id="penunjang" class="form-control" style="min-width: 100%" >{{old('penunjang')}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>                                                          
                                                    
                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('diagnosa') ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            {!! Form::label('diagnosa','Diagnosa', ['class' => 'login2 pull-left pull-left-pro']) !!}
                                                                <font style="color: red; "><b>*</b></font>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="chosen-select-single">
                                                                    <select data-placeholder="Pilih Diagnosa . . ." class="chosen-select" name="diagnosa[]" multiple="" tabindex="-1">

                                                                    @if(count($list_diagnosa)>0)
                                                                    @foreach($list_diagnosa as $key)
                                                        
                                                                        <option value="{{ $key -> id }}" {{ (collect(old('diagnosa'))->contains($key->id)) ? 'selected':'' }} >{{ $key -> nama_diagnosa }} ( {{ $key -> kode_diagnosa }} )
                                                                        </option>
                                                        
                                                                    @endforeach
                                                                    @endif
                                                                    </select>
                                                                </div>

                                                                @if($errors->has('diagnosa'))
                                                                <span class="help-block">{{$errors->first('diagnosa')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('tindakan')  ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        {!! Form::label('tindakan','Tindakan Medis', ['class' => 'login2 pull-left pull-left-pro']) !!}
                                                                <font style="color: red; "><b>*</b></font>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="chosen-select-single">
                                                                    <select data-placeholder="Pilih Tindakan . . ." class="chosen-select" name="tindakan[]" multiple="" tabindex="-1">
                                                                    @if(count($list_tindakan)>0)
                                                                    @foreach($list_tindakan as $key)
                                                        
                                                                        <option value="{{ $key -> id }}"  {{ (collect(old('tindakan'))->contains($key->id)) ? 'selected':'' }} >{{ $key -> nama_tindakan }} ( {{ $key -> kode_tindakan }} )
                                                                        </option>
                                                        
                                                                    @endforeach
                                                                    @endif
                                                                    </select>
                                                                </div>

                                                                @if($errors->has('tindakan'))
                                                                <span class="help-block">{{$errors->first('tindakan')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
      
                                                    </div>

                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                                    @if($errors->any())
                                                <div  class="form-group-inner {{$errors->has('namaobat')    ? 'has-error' : 'has-success' }}">
                                                @else
                                                    <div class="form-group-inner">
                                                @endif
                                                        <label for="obat" class="login2 pull-left pull-left-pro">Pengobatan</label>
                                                                <font style="color: red; "><b>*</b></font>
                                                        <table class="table table-bordered">
                                                            <thead >
                                                                <th width="56%" style="text-align: center;">Obat</th>
                                                                <th width="14%" style="text-align: center;">Aturan</th>
                                                                <th width="10%" style="text-align: center;">Stok</th>
                                                                <th width="10%" style="text-align: center;">Jumlah</th>
                                                                <th width="10%" style="text-align: center;">Sisa</th>
                                                                <th style="text-align: center"><a href="javascript:void();" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                                                            </thead>
                                                            <tbody class="pengobatan">
                                                                <tr>
                                                                    <td>
                                                                        
                                                                        <select name="nama_obat[]" class="form-control nama_obat" tabindex="-1">
                                                                            <option selected="true" disabled="true">Pilih Obat</option>
                                                                            @foreach($list_obat as $key => $p)
                                                                            <option value="{!!$key!!}">{!!$p!!}</option>

                                                                            @endforeach                   

                                                                        </select>
                                                                        
                                                                    </td>
                                                                    <input type="hidden" name="namaobat[]" class="form-control namaobat">
                                                                    <td><input type="text" name="aturan[]" class="form-control aturan"></td>
                                                                    <td><input type="text" name="stok[]" class="form-control stok" disabled="true"></td>
                                                                    <input type="hidden" name="stok[]" class="form-control stok">
                                                                    <td><input type="text" name="jumlah[]" class="form-control jumlah"></td>
                                                                    <td><input type="text" name="sisa[]" class="form-control sisa" disabled="true"></td>
                                                                    <input type="hidden" name="sisa[]" class="form-control sisa">

                                                                    <td style="text-align: center"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                                @if($errors->has('namaobat'))
                                                                <span class="help-block">{{$errors->first('namaobat')}}</span>
                                                                @endif
                                                    </div>
                                                </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-center">
                                                                        <!-- <button class="btn btn-white" type="submit" onclick="kembali();">Kembali</button> -->
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit"> Simpan</button>
                                                                    </div>
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
        <!-- Basic Form End-->

<script type="text/javascript">
    
    $('tbody').delegate('.nama_obat','change', function(){
        var tr = $(this).parent().parent();
        var id = tr.find('.nama_obat').val();
        var dataId = {'id':id};
        $.ajax({
            type    : 'GET',
            url     : '{!!URL::route('findStok')!!}',
            dataType: 'json',
            data    : dataId,
            success:function(data){
                tr.find('.stok').val(data.stok);                
                tr.find('.namaobat').val(data.nama_obat);
            }
        });
    });

    $('tbody').delegate('.nama_obat','change', function(){
        var tr = $(this).parent().parent();
        tr.find('.aturan').focus();
    });

    $('tbody').delegate('.stok,.jumlah','keyup', function(){
        var tr = $(this).parent().parent();
        var stoklama = tr.find('.stok').val();
        var jumlah = tr.find('.jumlah').val();
            var stokbaru = (stoklama - jumlah);
            tr.find('.sisa').val(stokbaru);

            if(stoklama <= jumlah){
                alert('Stok Kurang');
                var stokbaru = ( stoklama-stoklama );
                tr.find('.sisa').val(stokbaru);
            }
        // if(stoklama > jumlah){      
        //     alert('Stok Cukup');      
        //     tr.find('.jumlah').val(jumlah);
        //     var stokbaru = (stoklama - jumlah);
        //     tr.find('.sisa').val(stokbaru);
        // } else if(stoklama == jumlah){
        //     alert('Stok Habis');
        // } else{
        //     alert('Stok Kurang');
        //     tr.find('.jumlah').val(stoklama);
        //     var stokbaru = (stoklama - stoklama);
        //     tr.find('.sisa').val(stokbaru);
        // } 
    });


    $('.addRow').on('click', function(){
        addRow();
    });
    function addRow(){
        var tr='<tr>'+
                '<td>'+
                '<select name="nama_obat[]" class="form-control nama_obat">'+
                '<option value="0" selected="true" disabled="true">Pilih Obat</option>'+
                '@foreach($list_obat as $key => $p)'+
                '<option value="{!!$key!!}">{!!$p!!}</option>'+
                '@endforeach'+
                '</select>'+
                '</td>'+
                '<input type="hidden" name="namaobat[]" class="form-control namaobat">'+
                '<td><input type="text" name="aturan[]" class="form-control aturan"></td>'+
                '<td><input type="text" name="stok[]" class="form-control stok" disabled="true"></td>'+
                '<input type="hidden" name="stok[]" class="form-control stok">'+
                '<td><input type="text" name="jumlah[]" class="form-control jumlah"></td>'+
                '<td><input type="text" name="sisa[]" class="form-control sisa" disabled="true"></td>'+
                '<input type="hidden" name="sisa[]" class="form-control sisa">'+
                '<td style="text-align: center"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></td>'+
                '</tr>';
        $('.pengobatan').append(tr);
    };
    $('.remove').live('click', function(){
        var l = $('tbody tr').lenght;
        if(l==1){
            a
            lert('Anda tidak dapat menghapus yang terakhir');
        }else{
            $(this).parent().parent().remove();
        }
    });

    $('.addRowRiwayat').on('click', function(){
        addRowRiwayat();
    });
    function addRowRiwayat(){
        var tr='<tr>'+
                '<td>'+
                '<input type="text" name="riwayat2[]" class="form-control riwayat2">'+
                '</td>'+
                '<td style="text-align: center"><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></td>'+
                '</tr>';
        $('.riwayat').append(tr);
    };



</script>

@endsection()