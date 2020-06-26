<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    //

    protected $table = 'riwayat';

    protected $fillable = ['riwayat, id_pasien'];

    public function pasien(){
    	return $this->belongsTo('App\Pasien','id_pasien');
    }

    public function getNamaAttribute($riwayat){
    	return ucwords($riwayat);
    }

    public function rekammedis(){
    	return $this->belongsToMany('App\RekamMedis','det_riwayat','id_riwayat','id_rekammedis');
    }
}
