<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    //
    protected $table = 'tindakan';

    protected $fillable = 
    [
    	'nama_tindakan', 'kode_tindakan'
    ];

    public function getNamaAttribute($nama){
    	return ucwords($nama);
    }

    public function rekammedis(){
    	return $this->belongsToMany('App\RekamMedis','det_tindakan','id_tindakan','id_rekammedis');
    }
}
