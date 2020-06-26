<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Obat;

class StokObat extends Model
{
    //

    protected $table = 'stok_obat';

    public function obat(){
    	return $this->belongsTo('App\Obat','id_obat');
    }

    protected $fillable = 
    [
    	'tgl', 'stok', 'stok_out', 'id_obat'
    ];

}
