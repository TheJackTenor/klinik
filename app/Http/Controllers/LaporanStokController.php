<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StokObat;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\LapStokObatExport;

class LaporanStokController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

	public function index(){
		$halaman = 'lap-stok';
		return view('stok_obat', compact('halaman'));
	}

	public function cari(Request $request){
		$halaman = 'lap-stok';
		$this->validate($request, [
			'dari' => 'required',
			'sampai' => 'required'
		]);

		$dari = date('Y-m-d', strtotime($request->dari));
		$sampai = date('Y-m-d', strtotime($request->sampai));

		// $user_list = User::all();
		// $kunjungan = DB::table('rekammedis')->whereBetween('tgl', [$dari, $sampai])->get();
		$stok = StokObat::select('tgl','stok','stok_out','id_obat')->whereBetween('tgl', [$dari, $sampai])->get();
		$jumlah_stok = $stok->count();

		return view('stok_obat', compact('halaman','stok','jumlah_stok','dari','sampai'));
	}

	public function export_stok($dari, $sampai){

		$nama_file = 'Laporan Stok Obat'.date('Y-m-d_H-i-s').'.xlsx';
		return Excel::download(new LapStokObatExport($dari,$sampai), $nama_file);

	}
}
