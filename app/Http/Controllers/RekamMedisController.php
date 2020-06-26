<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\RekamMedis;
use App\Diagnosa;
use App\Tindakan;
use App\Obat;
use App\Pasien;
use App\DetTindakan;
use App\DetDiagnosa;
use App\DetPengobatan;
use App\StokObat;
use App\Riwayat;
use App\DetRiwayat;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class RekamMedisController extends Controller
{
    //
    
  public function __construct()
  {
      $this->middleware('auth');
  }

	public function index()
    {
    	$halaman = 'rekammedis';
    	$rekammedis_list = RekamMedis::all();
        return view('rekammedis_tambah', compact('halaman','rekammedis_list'));
    }

    public function create($id)
    {
        $halaman = 'pasien';
        $pasien = Pasien::findOrFail($id);
        $dokter = User::all();
    	$list_diagnosa = Diagnosa::select('nama_diagnosa','kode_diagnosa','id')->get();
    	$list_tindakan = Tindakan::select('nama_tindakan','kode_tindakan','id')->get();
    	$list_obat = Obat::pluck('nama_obat','id');
      // $riwayat = Riwayat::findOrFail($riwayat);
      $list_riwayat = Riwayat::select('riwayat')->where('id_pasien','=',$id)->get();
      // dd($list_diagnosa);
    	return view('rekammedis_tambah',compact('halaman','pasien','list_diagnosa','list_tindakan','list_obat','dokter','list_riwayat'));
    }

    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'keluhan' => 'required|string|max:300',
            'pemeriksaan' => 'required|string|max:300',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'namaobat' => 'required',
            'aturan' => 'required',
            'jumlah' => 'required'
        ]);
        // dd($request->all());
        // dd($validator->fails());

        if($validator->fails()){
            // return redirect('rekammedis/'.$id.'/create')
            return back()
            ->withInput($request->all())
            ->withErrors($validator);
        }


        $rekammedis = new RekamMedis;
        $rekammedis->tgl = \Carbon\Carbon::parse($request->tgl)->format("Y-m-d");
        $rekammedis->keluhan =$request->keluhan;
        $rekammedis->pemeriksaan = $request->pemeriksaan;
        $rekammedis->penunjang = $request->penunjang;
        $rekammedis->id_pasien = $request->id_pasien;
        $rekammedis->id_dokter = $request->id_dokter;
        if($rekammedis->save()){
          $id = $rekammedis->id;
          foreach ($request->nama_obat as $key => $v) {

            $id_obat = $v;
            $nama_obat = Obat::select('nama_obat')->where('id','=',$id_obat)->value('nama_obat');
            $datastok = array(
                              'nama_obat' => $request->namaobat[$key],
                              'stok' => $request->sisa[$key]);
            DB::table('obat')->where('id','=',$id_obat)->update($datastok);
            $dataobat = array('id_rekammedis'=>$id,
                              'id_obat'=>$v,
                              'aturan'=>$request->aturan[$key],
                              'jumlah'=>$request->jumlah[$key]);
            DetPengobatan::insert($dataobat);
            
            $datastok2 = array(
                              'tgl' => $rekammedis->tgl,
                              'stok' => $request->stok[$key],
                              'stok_out' => $request->jumlah[$key],
                              'id_obat' => $v);
            StokObat::insert($datastok2);
            
            // dd($dataobat);
            
            // dd($nama_obat);
            // dd($datastok);

            // $test = $request->namaobat;
            // dd($test);
          }


          // $nama_riwayat = Riwayat::select('riwayat')->where('id_pasien','=',$id_pasien)->get();
          // dd($nama_riwayat);
          if ($request->filled('riwayat2')) { 

            $riwayat_array = $request->riwayat2;
            $array_len = count($riwayat_array);
            // dd($array_len);
            for($i=0;$i<$array_len;$i++){
              $nama_riwayat = Riwayat::select('riwayat')->get();
            if ($nama_riwayat != $request->riwayat2[$i]) {
              $datariwayat = array(
                              'id_pasien' => $request->id_pasien,
                              'riwayat' => $request->riwayat2[$i]);
            
              $getIdRiwayat = DB::table('riwayat')->insertGetId($datariwayat);
              $detailriwayat = array(
                              'id_rekammedis' => $id,
                              'id_riwayat' => $getIdRiwayat);
              DetRiwayat::insert($detailriwayat);
            }
            }
          }

          if ($request->filled('riwayat1')) {
            $riwayat_array = $request->riwayat1;
            $array_len = count($riwayat_array);
            for($i=0;$i<$array_len;$i++){
              $id_riwayat = Riwayat::select('id')->where('riwayat','=',$request->riwayat1[$i])->value('id');
              $detailriwayatrec = array(
                              'id_rekammedis' => $id,
                              'id_riwayat' => $id_riwayat);
              DetRiwayat::insert($detailriwayatrec);
            }
          }


          // foreach ($request->diagnosa as $key => $v) {
          //   $datadiagnosa = array('id_rekammedis'=>$id,
          //                     'id_diagnosa'=>$v);
          //   // dd($datadiagnosa);
          //   DetDiagnosa::insert($datadiagnosa);
          // }
          // foreach ($request->tindakan as $key => $v) {
          //   $datatindakan = array('id_rekammedis'=>$id,
          //                     'id_tindakan'=>$v);
          //   DetTindakan::insert($datatindakan);
          // }
          // $rekammedis->pengobatan()->attach($request->input('pengobatan'));

          $rekammedis->diagnosa()->attach($request->input('diagnosa'));
          $rekammedis->tindakan()->attach($request->input('tindakan'));

        }

        // $input = $request->all();

        // $validator = Validator::make($input, [
        //     'tgl' => 'required|date', 
        //     'keluhan' => 'required|string', 
        //     'pemeriksaan' => 'required|string',
        //     'penunjang' => 'required|string',
        //     'no_RMPasien' => 'required',
        // ]);

        // if ($validator->fails()){
        //     return redirect('rekammedis/create')->withInput()->withErrors($validator);
        // }

        // $rekammedis = RekamMedis::create($rekammedis1);

        // $rekammedis->diagnosa()->attach($request->input('diagnosa'));
        // $rekammedis->tindakan()->attach($request->input('tindakan'));
        // $rekammedis->pengobatan()->attach($request->input('pengobatan'));

        return redirect('pasien/'.$rekammedis->id_pasien.'/rekammedis/'.$id);
    }

    public function findStok(Request $request){
      $data = Obat::select('nama_obat','stok')->where('id', $request->id)->first();
      return response()->json($data);
    }

}
