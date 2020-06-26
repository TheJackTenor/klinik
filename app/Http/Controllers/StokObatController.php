<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StokObat;

class StokObatController extends Controller
{
    //

	public function __construct(){
        $this->middleware('auth');
    }

	// public function index()
 //    {
 //    	$halaman = 'stok_obat';
 //    	$stokobat_list = StokObat::all();
 //        return view('stok_obat', compact('halaman','stokobat_list'));
 //    }

}
