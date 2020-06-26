<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekamMedis;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\LapKunjunganExport;

class LaporanKunjunganController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

	public function index(){
		$halaman = 'lap-kunjungan';
		return view('laporan-kunjungan', compact('halaman'));
	}

	public function cari(Request $request){
		$halaman = 'lap-kunjungan';
		$this->validate($request, [
			'dari' => 'required',
			'sampai' => 'required'
		]);

		$dari = date('Y-m-d', strtotime($request->dari));
		$sampai = date('Y-m-d', strtotime($request->sampai));

		// $user_list = User::all();
		// $kunjungan = DB::table('rekammedis')->whereBetween('tgl', [$dari, $sampai])->get();
		
		// $idrekammedis = DB::table('rekammedis')->select('id')->whereBetween('tgl', [$dari, $sampai])->get();
		// // dd($idrekammedis);

		// $array_len = count($idrekammedis);
		// // dd($array_len);
  //       for($i=0;$i<$array_len;$i++){
  //       	$idrekammedis2= DB::table('rekammedis')->select('id')->whereBetween('tgl', [$dari, $sampai])->value('id');
		// // dd($idrekammedis2);
  //       	$idrekammedis3 = $idrekammedis2[$i];
  //       	// dd($idrekammedis3);
  //       	$kj = RekamMedis::findOrFail($idrekammedis3);
  //       	dd($kj);
  //       }
		


		$kunjungan1 = DB::table('rekammedis')
		->join('pasien', function($join){$join->on('rekammedis.id_pasien','=','pasien.id');})
		->join('user', function($join){$join->on('rekammedis.id_dokter','=','user.id');})
		->whereBetween('tgl', [$dari, $sampai])->get();
		

		$kunjungan2 = DB::table('rekammedis')->join('det_diagnosa', function($join){$join->on('rekammedis.id','=','det_diagnosa.id_rekammedis');})
		->join('diagnosa', function($join){$join->on('diagnosa.id','=','det_diagnosa.id_diagnosa');})
        ->whereBetween('tgl', [$dari, $sampai])->get();
        
		$jumlah_kunjungan = $kunjungan1->count();

		return view('laporan-kunjungan', compact('halaman','kunjungan1','kunjungan2','kunjungan3','jumlah_kunjungan','dari','sampai','idrekammedis','kj'));
	}

	public function export_kunjungan($dari, $sampai){

		
		$nama_file = 'Laporan Kunjungan'.date('Y-m-d_H-i-s').'.xlsx';
		return Excel::download(new LapKunjunganExport($dari,$sampai), $nama_file);

	}
}
