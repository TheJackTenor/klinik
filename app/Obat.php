<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $table = 'obat';

    protected $fillable = 
    [
    	'nama_obat', 'stok', 'satuan'
    ];

    public function stok_obat(){
        return $this->hasMany('App\StokObat', 'id_obat');
    }

    public function getNamaAttribute($nama){
    	return ucwords($nama);
    }

    public function pengobatan(){
    	return $this->hasMany('App\Pengobatan','id_obat');
    }

    public function rekammedis(){
        return $this->hasMany('App\RekamMedis', 'id_obat');
    }

    // public function pengobatan(){
    //     return $this->belongsToMany('App\RekamMedis','det_pengobatan','id_obat','id_rekammedis');
    // }
}
