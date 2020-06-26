<?php 

namespace App\Exports;

use Illuminate\Contracts\View\View;
use App\RekamMedis;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;


/**
 * 
 */
class LapKunjunganExport implements FromView
{
	

	public function __construct(string $dari, string $sampai)
    {
	
    	$this->dari = $dari;

    	$this->sampai = $sampai;

	}
    	
    public function view(): View
	{	
		$kunjungan1 = DB::table('rekammedis')
		->join('pasien', function($join){$join->on('rekammedis.id_pasien','=','pasien.id');})
		->join('user', function($join){$join->on('rekammedis.id_dokter','=','user.id');})
		->whereBetween('tgl', [$this->dari, $this->sampai])->get();

		// $kunjungan1 = DB::table('rekammedis')->whereBetween('tgl', [$this->dari, $this->sampai])->get();
  //   	$kunjungan2 = DB::table('rekammedis')->join('det_diagnosa', function($join){$join->on('rekammedis.id','=','det_diagnosa.id_rekammedis');})
		// ->join('diagnosa', function($join){$join->on('diagnosa.id','=','det_diagnosa.id_diagnosa');})
  //       ->whereBetween('tgl', [$this->dari, $this->sampai])->get();
		$jumlah_kunjungan = $kunjungan1->count();
		return view('laporan.laporan_kunjungan_excel',['kunjungan1' => $kunjungan1, 'kunjungan2' => $kunjungan2, 'jumlah_kunjungan' => $jumlah_kunjungan]);
	}
	
  
}


?>