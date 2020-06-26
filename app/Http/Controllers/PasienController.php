<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\RekamMedis;
use App\User;
use App\DetPengobatan;
use Validator;
use Session;

class PasienController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	$halaman = 'pasien';
    	// $pasien_list = ['12','re','re','re','er','re'];
    	$pasien_list = Pasien::all();
        $jumlah_pasien = $pasien_list->count();
        return view('pasien', compact('halaman','pasien_list','jumlah_pasien'));
    }

    public function detail($id)
    {
    	$halaman = 'pasien';
    	$pasien = Pasien::findOrFail($id);
    	return view('pasien_detail',compact('halaman','pasien'));
    }

    public function detailrekammedis($id, $id_detail_rm)
    {
        $halaman = 'pasien';
        $pasien = Pasien::findOrFail($id);
        $rekammedis = RekamMedis::findOrFail($id_detail_rm);
        // $pengobatan = DetPengobatan::select('aturan','jumlah')->where('id_rekammedis','=',$id_detail_rm)->get();
        return view('pasien_detailrekammedis',compact('halaman','pasien','rekammedis'));
    }

    public function create()
    {
    	$halaman = 'pasien';
    	return view('pasien_tambah',compact('halaman'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'no_rm' =>  'required|max:6|unique:pasien',
            'nama_pasien' => 'required|string|max:150',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('pasien/create')
            ->withInput()
            ->withErrors($validator);
        }

        Pasien::create($input);

        Session::flash('flash_message', 'Data Pasien Berhasil Disimpan.');

        return redirect('pasien');
    }

    public function edit($id)
    {
    	$pasien = Pasien::findOrFail($id);
    	return view('pasien_edit', compact('pasien'));
    }

    public function update($id, Request $request)
    {
        $pasien = Pasien::findOrFail($id);
        $input = $request->all();
        
        // $pasien->nama = $request->nama;
        // $pasien->tempat_lahir = $request->tempat_lahir;
        // $pasien->tgl_lahir = $request->tgl_lahir;
        // $pasien->gender = $request->gender;
        // $pasien->alamat = $request->alamat;
        // $pasien->save();

        $validator = Validator::make($input, [
            'no_rm' =>  'required|string|size:6|unique:pasien,no_rm,'.$id,
            'nama_pasien' => 'required|string|max:150',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('pasien/'.$id.'/edit')
            ->withInput()
            ->withErrors($validator);
        }

        $pasien->update($request->all());

        Session::flash('flash_message_update', 'Data Pasien Berhasil di Update.');

        return redirect('pasien');        
    }

    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        Session::flash('flash_message_delete', 'Data Pasien Berhasil Dihapus.');
        Session::flash('penting', true);

        return redirect('pasien');
    }
}
