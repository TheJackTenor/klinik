<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    //
    protected $table = 'rekammedis';

    protected $fillable = ['tgl', 'keluhan', 'pemeriksaan', 'penunjang','id_pasien','id_dokter'];

    public function pasien(){
    	return $this->belongsTo('App\Pasien','id_pasien');
    }

    public function dokter(){
        return $this->belongsTo('App\User','id_dokter');
    }

    public function diagnosa(){
    	return $this->belongsToMany('App\Diagnosa','det_diagnosa','id_rekammedis','id_diagnosa')->withTimeStamps();
    }

    public function tindakan(){
    	return $this->belongsToMany('App\Tindakan','det_tindakan','id_rekammedis','id_tindakan')->withTimeStamps();
    }
    
    public function pengobatan(){
    	return $this->belongsToMany('App\Obat','det_pengobatan','id_rekammedis','id_obat')->withPivot('aturan', 'jumlah')->withTimeStamps();
    }

    public function riwayat(){
        return $this->belongsToMany('App\Riwayat','det_riwayat','id_rekammedis','id_riwayat')->withTimeStamps();
    }
}
