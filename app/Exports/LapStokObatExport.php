<?php 

namespace App\Exports;

use Illuminate\Contracts\View\View;
use App\StokObat;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;


/**
 * 
 */
class LapStokObatExport implements FromView
{
	

	public function __construct(string $dari, string $sampai)
    {
	
    	$this->dari = $dari;

    	$this->sampai = $sampai;

	}
    	
    public function view(): View
	{	
		
    	$stok = StokObat::select('tgl','stok','stok_out','id_obat')->whereBetween('tgl', [$this->dari, $this->sampai])->get();;
        
		return view('laporan.laporan_stokobat_excel',['stok' => $stok ]);
	}
	
  
}


?>