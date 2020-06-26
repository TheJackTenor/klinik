<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'pasien';

    protected $fillable = ['no_rm', 'nama_pasien', 'jenis_kelamin', 'alamat', 
    'tempat_lahir', 'tanggal_lahir'];

    public function rekammedis(){
    	return $this->hasMany('App\RekamMedis', 'id_pasien');
    }

    public function riwayat(){
        return $this->hasMany('App\Riwayat', 'id_pasien');
    }

    public function getNamaAttribute($nama){
    	return ucwords($nama);
    }

    public function getTempatLahirAttribute($tempat_lahir){
    	return ucwords($tempat_lahir);
    }

    public function getAlamatAttribute($alamat){
    	return ucwords($alamat);
    }
}
