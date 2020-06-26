<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    //
    protected $table = 'diagnosa';

    protected $fillable = 
    [
    	'nama_diagnosa', 'kode_diagnosa'
    ];

    public function getNamaAttribute($nama){
    	return ucwords($nama);
    }

    public function rekammedis(){
    	return $this->belongsToMany('App\RekamMedis','det_diagnosa','id_diagnosa','id_rekammedis');
    }
}
