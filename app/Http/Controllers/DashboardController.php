<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\RekamMedis;
use App\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
    	$halaman = 'dashboard';
        $rekammedis_list = RekamMedis::all();
    	$pasien_list = Pasien::all();
        $user_list = User::all();
        $jumlah_pasien = $pasien_list->count();
        $jumlah_rekammedis = $rekammedis_list->count();
        $dokter = $user_list->where('level','=','dokter');
        $jumlah_dokter = $dokter->count();
        $perawat = $user_list->where('level','=','perawat');
        $jumlah_perawat = $perawat->count();

        return view ('dashboard', compact('halaman','pasien_list','jumlah_pasien','rekammedis_list','jumlah_rekammedis','jumlah_dokter','jumlah_perawat'));
    }

}
